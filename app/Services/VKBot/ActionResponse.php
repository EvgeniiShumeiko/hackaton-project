<?php

namespace App\Services\VKBot;

use App\Services\Homeworks\HomeworkReplies\HomeworkRepliesService;
use App\Services\Homeworks\HomeworksService;
use App\Services\Users\UsersService;
use App\Services\VKBot\Providers\BotKeyboard\Button;
use App\Services\VKBot\Providers\BotKeyboard\ButtonRowFactory;
use App\Services\VKBot\Providers\BotKeyboard\KeyboardFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use VK\Client\VKApiClient;

class ActionResponse
{

    private $vkApiClient;
    private $request;
    private $accessToken;
    private $botStandartMessages;

    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private $botButtonLabels;
    /**
     * @var UsersService|mixed
     */
    protected UsersService $userService;
    /**
     * @var HomeworksService|mixed
     */
    protected HomeworksService $homeworkService;

    protected HomeworkRepliesService $homeworkRepliesService;


    public function __construct(
        Request $request,
        VKApiClient $vkApiClient,
        string $accessToken
    )
    {
        $this->botStandartMessages = config('bot_messages');
        $this->botButtonLabels = config('bot_button_names');
        $this->request = $request;
        $this->vkApiClient = $vkApiClient;
        $this->accessToken = $accessToken;

        $this->userService = app()->make(UsersService::class);
        $this->homeworkService = app()->make(HomeworksService::class);
        $this->homeworkRepliesService = app()->make(HomeworkRepliesService::class);
    }

    public function start()
    {
        $btnStart = Button::create(['button' => 'start_upload'], $this->botButtonLabels['start'], 'positive');

        $btnRow = ButtonRowFactory::createRow()
            ->addButton($btnStart)
            ->getRow();

        $kb = KeyboardFactory::createKeyboard()
            ->addRow($btnRow)
            ->setOneTime(true)
            ->getKeyboardJson();

        $params = [
            'user_id' => $this->request->object['from_id'],
            'random_id' => rand(0, 2 ** 31),
            'message' => $this->botStandartMessages['start_message'],
            'keyboard' => $kb,
        ];

        $this->vkApiClient->messages()->send($this->accessToken, $params);
    }

    public function startUpload()
    {
        $vk_user_id = $this->request->object['from_id'];
        $ref = request('object.ref', null);

        $payload = Cache::get("qr_hash_{$ref}");

        if ($payload) {
            $payload = json_decode($payload, 1);
            $user_id = $payload['user_id'];
            $homework_id = $payload['homework_id'];

            $homework = $this->homeworkService->getHomeworkByIdWithReplies($homework_id);
            $user = $this->userService->find($user_id);

            if ($homework && $user) {
                $message1 = "📚 Домашнее задание: \r\n\r\n{$homework->title}\r\n\r\n📖 Описание:\r\n\r\n{$homework->description}";
                $message2 = $this->botStandartMessages['start_upload'];
                $params1 = [
                    'user_id' => $this->request->object['from_id'],
                    'random_id' => rand(0, 2 ** 31),
                    'message' => $message1
                ];


                Cache::put("dialog_step_$vk_user_id", 'upload', now()->addMinutes(15));
                Cache::put("dialog_upload_step_{$vk_user_id}", json_encode($payload), now()->addMinutes(15));

                $btnStop = Button::create(['button' => 'stop_upload'], $this->botButtonLabels['stop_upload'], 'negative');
                $btnRow = ButtonRowFactory::createRow()
                    ->addButton($btnStop)
                    ->getRow();

                $kb = KeyboardFactory::createKeyboard()
                    ->addRow($btnRow)
                    ->setOneTime(true)
                    ->getKeyboardJson();
                $params2 = [
                    'user_id' => $this->request->object['from_id'],
                    'random_id' => rand(0, 2 ** 31),
                    'message' => $message2,
                    'keyboard' => $kb,
                ];

                $this->vkApiClient->messages()->send($this->accessToken, $params1);
                $this->vkApiClient->messages()->send($this->accessToken, $params2);
                return;
            }
            $params = [
                'user_id' => $this->request->object['from_id'],
                'random_id' => rand(0, 2 ** 31),
                'message' => $this->botStandartMessages['task_undefined'],
            ];

            $this->vkApiClient->messages()->send($this->accessToken, $params);
        }


    }

    public function upload()
    {
        $vk_user_id = $this->request->object['from_id'];

        $payload = Cache::get("dialog_upload_step_{$vk_user_id}");

        if ($payload) {
            $payload = json_decode($payload, 1);
            $user_id = $payload['user_id'];
            $homework_id = $payload['homework_id'];

            $homework = $this->homeworkService->getHomeworkByIdWithReplies($homework_id);
            $user = $this->userService->find($user_id);
            Log::info($payload);
            Log::info('homework - '.$homework);
            Log::info('user - '.$user);

            if ($homework && $user) {
                $homework_reply = $homework->replies->where('user_id', $user_id)->first();
                Log::info('homework_reply - '.$homework_reply);

                $text = \request('object.text', '');
                if ($homework_reply) {
                    $this->homeworkRepliesService->updateFromArray($homework_reply, [
                        'answer' => $homework_reply->answer . "\r\n" . $text
                    ]);
                    Log::info('update');
                } else {
                    $this->homeworkRepliesService->createFromArray([
                            'answer' => $text,
                            'user_id' => $user_id,
                            'homework_id' => $homework_id
                    ]);
                    Log::info('create');

                }
            }
        }

    }


    public function stopUpload()
    {
        $vk_user_id = $this->request->object['from_id'];
        Cache::put("dialog_step_$vk_user_id", 'start', 5);
        $payload = Cache::pull("dialog_upload_step_{$vk_user_id}");


        $btnStart = Button::create(['button' => 'start_upload'], $this->botButtonLabels['start'], 'positive');

        $btnRow = ButtonRowFactory::createRow()
            ->addButton($btnStart)
            ->getRow();

        $kb = KeyboardFactory::createKeyboard()
            ->addRow($btnRow)
            ->setOneTime(true)
            ->getKeyboardJson();

        $params1 = [
            'user_id' => $this->request->object['from_id'],
            'random_id' => rand(0, 2 ** 31),
            'message' => $this->botStandartMessages['end_upload'],
            'keyboard' => $kb,
        ];

        $this->vkApiClient->messages()->send($this->accessToken, $params1);

        if ($payload) {
            $payload = json_decode($payload, 1);
            $user_id = $payload['user_id'];
            $homework_id = $payload['homework_id'];

            $homework = $this->homeworkService->getHomeworkByIdWithReplies($homework_id);
            $user = $this->userService->find($user_id);

            if ($homework && $user) {
                $homework_reply = $homework->replies()->whereUserId($user_id)->first();
                if ($homework_reply) {
                    $message2 = "Ответ на домашнюю работу:\r\n";
                    $message2 .= $homework_reply->answer;
                    $params2 = [
                        'user_id' => $this->request->object['from_id'],
                        'random_id' => rand(0, 2 ** 31),
                        'message' => $message2,
                        'keyboard' => $kb,
                    ];

                    $this->vkApiClient->messages()->send($this->accessToken, $params2);
                }

            }
        }


    }
    public function defaultResponse()
    {
        $params = [
            'user_id' => $this->request->object['from_id'],
            'random_id' => rand(0, 2 ** 31),
            'message' => $this->botStandartMessages['default_message'],
        ];

        $this->vkApiClient->messages()->send($this->accessToken, $params);
    }
}

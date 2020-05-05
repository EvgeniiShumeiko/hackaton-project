<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\VKBot\Handlers\Commands;


use App\Services\VKBot\ActionResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use VK\Client\VKApiClient;

class NewMessageCommandHandler
{
    public function handle(Request $request)
    {
        $userId = $request->object['from_id'];

        $dialogStep = Cache::remember("dialog_step_$userId", 5,
            function () use ($userId) {
                return 'start';
            });

        if (isset($request->object['payload'])) {
            $payload = json_decode($request->object['payload'], true);
            if (isset($payload['button'])) {
                $dialogStep = $payload['button'];
            }
        }

        $actionResponse = new ActionResponse(
            $request,
            new VKApiClient('5.100'),
            config('bot.vk_api_key'));

        switch ($dialogStep) {
            case 'start':
                $actionResponse->start();
                break;

            case 'upload':
                $actionResponse->upload();
                break;

            case 'start_upload':
                $actionResponse->startUpload();
                break;
            case 'stop_upload':
                $actionResponse->stopUpload();
                break;

            default:
                $actionResponse->defaultResponse();
        }
        return 'ok';
    }
}

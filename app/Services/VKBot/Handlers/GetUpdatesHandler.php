<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\VKBot\Handlers;


use App\Services\VKBot\Enums\UpdateMessageType;
use App\Services\VKBot\Handlers\Commands\NewMessageCommandHandler;
use App\Services\VKBot\Resolves\UpdateMessageResolver;
use Illuminate\Http\Request;

class GetUpdatesHandler
{
    /**
     * @var UpdateMessageResolver
     */
    protected UpdateMessageResolver $updateMessageResolver;
    protected NewMessageCommandHandler $newMessageCommandHandler;

    /**
     * GetUpdatesHandler constructor.
     * @param UpdateMessageResolver $updateMessageResolver
     * @param NewMessageCommandHandler $newMessageCommandHandler
     */
    public function __construct(
        UpdateMessageResolver $updateMessageResolver,
        NewMessageCommandHandler $newMessageCommandHandler
    )
    {
        $this->updateMessageResolver = $updateMessageResolver;
        $this->newMessageCommandHandler = $newMessageCommandHandler;
    }

    /**
     * @param Request $request
     */
    public function handle(Request $request)
    {
        $updates = $this->updateMessageResolver->resolve($request);

        switch ($updates->value) {
            case UpdateMessageType::KEY_CALLBACK:
                return '';

            case UpdateMessageType::CONFIRMATION:
                return config('bot.vk_confirmation_key');

            case UpdateMessageType::NEW_MESSAGE:
            default:
                return $this->newMessageCommandHandler->handle($request);
        }
    }
}

<?php


namespace App\Services\VKBot\Resolves;


use App\Services\VKBot\Enums\UpdateMessageType;
use Illuminate\Http\Request;

class UpdateMessageResolver
{
    public function resolve(Request $request): ?UpdateMessageType
    {
        //Если не верный secret
        if ($request->secret !== config('bot.vk_secret_key')) {
            return UpdateMessageType::KEY_CALLBACK();
        }

        //Если запрос типа `confirmation`
        if ($request->type === 'confirmation') {
            return UpdateMessageType::CONFIRMATION();
        }

        //Если новое сообщение
        if ($request->type === 'message_new') {
            return UpdateMessageType::NEW_MESSAGE();
        }

        return null;
    }
}

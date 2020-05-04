<?php
namespace App\Services\VKBot\Providers\BotKeyboard;

class KeyboardFactory
{

    public static function createKeyboard(): Keyboard
    {
        return new Keyboard();
    }

}

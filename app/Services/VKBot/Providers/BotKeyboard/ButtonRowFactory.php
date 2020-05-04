<?php
namespace App\Services\VKBot\Providers\BotKeyboard;

class ButtonRowFactory
{

    public static function createRow(): ButtonRow
    {

        return new ButtonRow();
    }

}

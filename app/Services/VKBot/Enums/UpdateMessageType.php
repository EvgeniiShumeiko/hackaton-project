<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\VKBot\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static KEY_CALLBACK()
 * @method static static CONFIRMATION()
 * @method static static NEW_MESSAGE()
 */
final class UpdateMessageType extends Enum
{
    const KEY_CALLBACK = 0;
    const CONFIRMATION = 1;
    const NEW_MESSAGE  = 2;
}

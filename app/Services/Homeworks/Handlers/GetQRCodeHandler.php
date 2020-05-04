<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\Homeworks\Handlers;


use App\Models\Homework;
use App\Models\User;
use App\Services\QRcode\QRcodeService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GetQRCodeHandler
{

    protected QRcodeService $qrCodeService;
    public function __construct(QRcodeService $QRcodeService)
    {
        $this->qrCodeService = $QRcodeService;
    }

    public function handle(Homework $homework, User $user)
    {
        $homework_id = $homework->id;
        $user_id = $user->id;
        $hash = $this->setHash($homework_id, $user_id);

        //TODO::remove hardcode
        $vkQrUrl = "https://vk.me/forwardOnline?ref={$hash}";
        return $this->qrCodeService->generateByUrl($vkQrUrl);
    }

    protected function setHash(int $homework_id, int $user_id)
    {
        $payload = json_encode(compact('homework_id', 'user_id'));
        $hash = md5(Str::random(32));
        $hash_key = self::getHashKey($hash);
        if (Cache::has($hash_key)) {
            return $this->setHash($homework_id, $user_id);
        }
        Cache::put($hash_key, $payload, now()->addMinutes(30));
        return $hash;
    }

    protected static function getHashKey(string $hash)
    {
        return "qr_hash_{$hash}";
    }
}

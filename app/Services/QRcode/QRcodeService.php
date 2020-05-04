<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\QRcode;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeService
{
    public function generateByUrl(string $url){
        return QrCode::generate($url);
    }
}

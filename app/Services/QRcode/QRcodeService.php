<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Services\QRcode;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeService
{
    public function generateByUrl(string $url){
        return QrCode::size(200)->color(69, 128, 194)->generate($url);
    }
}

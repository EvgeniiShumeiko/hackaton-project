<?php
/**
 * Evgenii Shumeiko (c) 2020.
 */

namespace App\Http\Controllers\Bots;

use App\Http\Controllers\Controller;
use App\Services\VKBot\Handlers\GetUpdatesHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Class VKBotController
 * @package App\Http\Controllers\Bots
 */
class VKBotController extends Controller
{
    /**
     * @var GetUpdatesHandler
     */
    protected GetUpdatesHandler $getUpdatesHandler;

    /**
     * VKBotController constructor.
     * @param GetUpdatesHandler $getUpdatesHandler
     */
    public function __construct(GetUpdatesHandler $getUpdatesHandler)
    {
        $this->getUpdatesHandler = $getUpdatesHandler;
    }

    /**
     * Точка входа обработки Callback Api VK
     * @param Request $request
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string
     */
    public function execute(Request $request)
    {
        Log::info(json_encode($request->toArray()));
        return $this->getUpdatesHandler->handle($request);
    }
}

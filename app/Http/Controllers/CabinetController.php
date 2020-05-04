<?php

namespace App\Http\Controllers;

use App\Services\Homeworks\HomeworksService;
use Illuminate\Http\Request;
use App\Models\User;

class CabinetController extends Controller
{

protected HomeworksService $homeworkService;

public function __construct(HomeworksService $homeworkService)
{
    $this->homeworkService = $homeworkService;
}
    public function index(User $user)
    {

        $qrCode = $this->homeworkService->getQRCode($this->homeworkService->find(1), \Auth::user());
        
        

        $homeworks = $this->homeworkService->getAll();



        return view('cabinet', compact('homeworks','qrCode'));
    }
}

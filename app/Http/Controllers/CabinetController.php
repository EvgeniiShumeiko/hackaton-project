<?php

namespace App\Http\Controllers;

use App\Services\Homeworks\HomeworksService;
use App\Services\Users\UsersService;
use Illuminate\Http\Request;
use App\Models\User;

class CabinetController extends Controller
{

protected HomeworksService $homeworkService;

public function __construct(HomeworksService $homeworkService, UsersService $userService)
{
    $this->homeworkService = $homeworkService;
    $this->userService = $userService;
}
    public function index(User $user)
    {

        $user = \Auth::user();

        $qrCode = $this->homeworkService->getQRCode($this->homeworkService->find(1), \Auth::user());
        
        

        $homeworks = $this->homeworkService->getAll();

        $isStudent = $this->userService->isStudent($user);
        $isTeacher = $this->userService->isTeacher($user);
        $isMethodist = $this->userService->isMethodist($user);

        $reply = $this->homeworkService->getHomeworkByIdWithReplies(1);

        return view('cabinet', compact('homeworks','qrCode','isStudent','isTeacher','isMethodist','reply'));
    }
}

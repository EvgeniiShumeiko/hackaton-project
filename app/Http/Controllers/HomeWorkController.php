<?php

namespace App\Http\Controllers;

use App\Services\Homeworks\HomeworksService;
use App\Services\Users\UsersService;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Homework;
use App\Models\Subject;

class HomeWorkController extends Controller
{
    public function __construct(HomeworksService $homeworkService, UsersService $userService)
    {
        $this->homeworkService = $homeworkService;
        $this->userService = $userService;
    }

    public function index($subject, $lesson, User $user){

        $qrCode = $this->homeworkService->getQRCode($this->homeworkService->find(1), \Auth::user());

        $homeWork = Homework::where('subject_id',$subject)->where('lesson_id',$lesson)->first();
        $subjectModel = Subject::where('id',$subject)->first();
        return view('homework', compact('qrCode','homeWork','subjectModel'));
    }
}

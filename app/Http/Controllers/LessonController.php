<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LessonController extends Controller
{
    public function index(){
        return view('lesson');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    public function index()
    {
        $homework = DB::table('homework_replies')->where('user_id',2)->get();
        return view('teacher', compact('homework'));
    }
}

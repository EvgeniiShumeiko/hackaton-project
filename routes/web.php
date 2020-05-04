<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('lesson', 'LessonController@index')->middleware('auth');

Route::get('cabinet', 'CabinetController@index')->middleware('auth');

Route::get('teacher', 'TeacherController@index')->middleware('auth');

Route::get('metodist', 'MetodistController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

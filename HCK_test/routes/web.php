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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/show_user', 'App\Http\Controllers\ResumeController@show')->name('showUser');
Route::get('/create_resume', 'App\Http\Controllers\ResumeController@createResume')->name('createResume');
Route::get('/show_user/{id}','App\Http\Controllers\ResumeController@showOneResume')->name('oneResume');
Route::get('/show_user/{id}/delete', 'App\Http\Controllers\ResumeController@deleteResume')->name('deleteResume');
Route::get('/show_user/{id}/update', 'App\Http\Controllers\ResumeController@updateResume')->name('updateResume');

Route::get('/change_user', 'App\Http\Controllers\ResumeController@goChange')->name('changeUser');
Route::post('/change_user/submit', 'App\Http\Controllers\ResumeController@changeUserData')->name('update_user_data');

Route::get('/show_user/{id}/download', 'App\Http\Controllers\ResumeController@downloadPDF')->name('downloadPDF');

Route::post('/show_user/{id}/update/submit', 'App\Http\Controllers\ResumeController@update_resume_submit')->name('update_resume_submit');
Route::post('/create_resume/submit', 'App\Http\Controllers\ResumeController@submitNewResume')->name('resume_form');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});




Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/studentlist', [TeacherController::class, 'studentlist'])->name('studentlist');
Route::get('/addteacher', [TeacherController::class, 'teacherform'])->name('addteacher');
Route::post('/addteacher', [TeacherController::class, 'addteacher'])->name('addteacher');
Route::get('/rating/{id}',[TeacherController ::class, 'rating'])->name('rating');
Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/addpost', function(){
    return view('addpost');
})->name('addpost');
Route::post('/updaterate/{id}', [TeacherController::class, 'updaterating'])->name('updaterate');





<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignCourseController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AdminController;
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
// Route::get('/studentlist', [TeacherController::class, 'studentlist'])->name('studentlist');
// Route::get('/addteacher', [TeacherController::class, 'teacherform'])->name('addteacher');
// Route::post('/addteacher', [TeacherController::class, 'addteacher'])->name('addteacher');
// Route::get('/rating/{id}',[TeacherController ::class, 'rating'])->name('rating');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


// Route::get('/addpost', function(){
//     return view('addpost');
// })->name('addpost');
// Route::post('/updaterate/{id}', [TeacherController::class, 'updaterating'])->name('updaterate');

// sessions route
Route::get('/session', [SessionController::class, 'session'])->name('session');
Route::post('/session', [SessionController::class, 'addsession'])->name('session');
Route::delete('/session/{id}', [SessionController::class, 'destroysession'])->name('destroysession');
Route::get('/session/{id}', [SessionController::class, 'editsession'])->name('editsession');
Route::post('/session/{id}', [SessionController::class, 'esession'])->name('editsession');
//! sessions route

// courses route
Route::get('/course', [CourseController::class, 'course'])->name('course');
Route::post('/course', [CourseController::class, 'addcourse'])->name('course');
Route::delete('/course/{id}', [CourseController::class, 'destroycourse'])->name('destroycourse');
Route::get('/course/{id}', [CourseController::class, 'editcourse'])->name('editcourse');
Route::post('/course/{id}', [CourseController::class, 'ecourse'])->name('editcourse');
//! courses route

// teachers route
Route::get('/teacher', [TeacherController::class, 'teacher'])->name('teacher');
Route::post('/teacher', [TeacherController::class, 'addteacher'])->name('teacher');
Route::delete('/teacher/{id}', [TeacherController::class, 'destroyteacher'])->name('destroyteacher');
Route::get('/teacher/{id}', [TeacherController::class, 'editteacher'])->name('editteacher');
Route::post('/teacher/{id}', [TeacherController::class, 'eteacher'])->name('editteacher');
//! teachers route

// assigncourses route
Route::get('/assigncourse', [AssignCourseController::class, 'assigncourse'])->name('assigncourse');
Route::post('/assigncourse', [AssignCourseController::class, 'addassigncourse'])->name('assigncourse');
Route::delete('/assigncourse/{id}', [AssignCourseController::class, 'destroyassigncourse'])->name('destroyassigncourse');
Route::get('/assigncourse/{id}', [AssignCourseController::class, 'editassigncourse'])->name('editassigncourse');
Route::post('/assigncourse/{id}', [AssignCourseController::class, 'eassigncourse'])->name('editassigncourse');
//! assigncourses route

// rating routes
Route::get('/ratingpage/{course_id}/{teacher_id}', [RatingController::class, 'ratingpage'])->name('ratingpage');
Route::post('/addrating/{id}', [RatingController::class, 'addrating'])->name('addrating');
Route::delete('/destroyrating/{id}', [RatingController::class, 'destroyrating'])->name('destroyrating');
Route::get('/updateratingpage/{id}', [RatingController::class, 'updateratingpage'])->name('updateratingpage');
Route::post('/updaterating/{id}', [RatingController::class, 'updaterating'])->name('updaterating');
//! rating routes

// admin route
Route::get('/courseteacher/{id}', [AdminController::class, 'courseteacher'])->name('courseteacher');
Route::get('/subject_teacher_rating/{session_id}/{course_id}/{teacher_id}', [AdminController::class, 'subjectTeacherRating'])->name('subject_teacher_rating');

//! admin route


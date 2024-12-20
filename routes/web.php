<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\CourseController;
use App\Http\Controllers\Course_StudentController;

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


Route::get('/home', function () {
    return view('Pages.Home');
})->name('home');
// Route::get('students/index',[StudentController::class,'index'])->name('students.index');
// Route::get('students/create',[StudentController::class,'create'])->name('students.create');
// Route::post('/students',[StudentController::class,'store'])->name('students.store');
// Route::delete('students/{student}', [StudentController::class,'destroy'])->name('students.destroy');
// Route::get('students/{student}',[StudentController::class,'edit'])->name('students.edit');
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/charts',function(){
    return view('Pages.charts');
})->name('charts');
Route::resource('enrolls', Course_StudentController::class);
//Route::get('/enroll',[Course_StudentController::class,'index'])->name('enroll');

// Route::get('courses/index',[CourseController::class,'index'])->name('courses.index');
// Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
// Route::post('/courses',[CourseController::class,'store'])->name('courses.store');

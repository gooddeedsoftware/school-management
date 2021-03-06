<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;




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
    return redirect()->action([HomeController::class, 'index']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('users', UsersController::class);


Route::get('/student', [StudentController::class, 'index'])->name('students');
Route::get('/studentform', [StudentController::class, 'create'])->name('studentform');

Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('/student/edit/{id}');
Route::post('/student/update', [StudentController::class, 'update'])->name('/student/update');

Route::post('/st_store', [StudentController::class, 'store'])->name('st_store');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::get('/teachers', [TeachersController::class, 'index'])->name('teacher.index');
Route::get('/teacher_form',[TeachersController::class, 'create'])->name('teacher_form');
Route::post('/teachers_data',[TeachersController::class, 'store'])->name('teachers_data');
Route::get('/teach/edit/{id}',[TeachersController::class, 'edit'])->name('/teach/edit/{id}');
Route::get('/teach/delete/{id}',[TeachersController::class, 'destroy'])->name('/teach/delete/{id}');
Route::post('/teachers_update',[TeachersController::class, 'update'])->name('/teachers_update');

<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AprendiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('areas', [AreaController::class , 'index'])->name('area.index');
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area/store',[AreaController::class,'store'])->name('area.store');
Route::get('area/show/{id}',[AreaController::class,'show'])->name('area.show');
Route::get('area/{id}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/{id}', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');


Route::get('centers', [TrainingCenterController::class , 'index'])->name('training_center.index');
Route::get('training_center/list',[TrainingCenterController::class,'index'])->name('training_center.list');
Route::get('training_center/create',[TrainingCenterController::class,'create'])->name('training_center.create');
Route::post('training_center/store',[TrainingCenterController::class,'store'])->name('training_center.store');
Route::get('training_center/show/{id}',[TrainingCenterController::class,'show'])->name('training_center.show');
Route::get('training_center/{id}/edit', [TrainingCenterController::class, 'edit'])->name('training_center.edit');
Route::put('training_center/{id}', [TrainingCenterController::class, 'update'])->name('training_center.update');
Route::delete('training_center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_center.destroy');

Route::get('computers', [ComputerController::class , 'index'])->name('computer.index');
Route::get('computer/list',[ComputerController::class,'index'])->name('computer.list');
Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');
Route::get('computer/show/{id}',[ComputerController::class,'show'])->name('computer.show');
Route::get('computer/{id}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{id}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

Route::get('teachers', [TeacherController::class , 'index'])->name('teacher.index');
Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.list');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/show/{id}',[TeacherController::class,'show'])->name('teacher.show');
Route::get('teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

Route::get('courses', [CourseController::class , 'index'])->name('course.index');
Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course/store',[CourseController::class,'store'])->name('course.store');
Route::get('course/show/{id}',[CourseController::class,'show'])->name('course.show');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');


Route::get('aprendice/list',[AprendiceController::class,'index'])->name('aprendice.index');
Route::get('aprendice/create',[AprendiceController::class,'create'])->name('aprendice.create');
Route::post('aprendice/store',[AprendiceController::class,'store'])->name('aprendice.store');
Route::get('aprendice/show/{id}',[AprendiceController::class,'show'])->name('aprendice.show');
Route::get('aprendice/{aprendice}/edit', [AprendiceController::class, 'edit'])->name('aprendice.edit');
Route::put('aprendice/{aprendice}', [AprendiceController::class, 'update'])->name('aprendice.update');
Route::delete('aprendice/{aprendice}', [AprendiceController::class, 'destroy'])->name('aprendice.destroy');

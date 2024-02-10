<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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
// Route::get('/create-student', [App\Http\Controllers\StudentController::class, 'create_student'])->name('create.student');
// Route::post('/create-student', [App\Http\Controllers\StudentController::class, 'store_student'])->name('store.student');
// Route::get('/student-list', [App\Http\Controllers\StudentController::class, 'student_list'])->name('student.list');
// Route::get('/student/{id}', [App\Http\Controllers\StudentController::class, 'student_edit'])->name('student.edit');
// Route::put('/student/{id}', [App\Http\Controllers\StudentController::class, 'student_update'])->name('student.update');
//Route::delete('/student/{id}', [App\Http\Controllers\StudentController::class, 'student_delete'])->name('student.delete');


Route::get('/cirtificate', [InfoController::class, 'index_cirtificate'])->name('cirtificate.page');
Route::post('/cirtificate', [InfoController::class, 'cirtificate_store'])->name('cirtificate.store');
Route::get('/cirtificate', [InfoController::class, 'cirtificate_list'])->name('cirtificate.list');
Route::get('/cirtificate-edit/{id}', [InfoController::class, 'cirtificate_edit'])->name('cirtificate.edit');
Route::put('/cirtificate/{id}', [InfoController::class, 'cirtificate_update'])->name('cirtificate.update');
Route::delete('/cirtificate/{id}', [InfoController::class, 'cirtificate_delete'])->name('cirtificate.delete');

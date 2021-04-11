<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/student',[StudentController::class, 'index'])->name('student');
Route::get('/add',[StudentController::class, 'create'])->name('create');
Route::post('/store',[StudentController::class, 'store'])->name('student.store');
Route::post('/edit',[StudentController::class, 'update'])->name('student.edit');
Route::get('/edit/{id}',[StudentController::class, 'edit']);
Route::get('/delete/{id}',[StudentController::class, 'destroy']);

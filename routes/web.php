<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index'])->name('students.index');
Route::get('/student/create', [StudentController::class,'create'])->name('students.create');
Route::post('/student/store', [StudentController::class,'store'])->name('students.store');
Route::get('/student/{id}/edit', [StudentController::class,'edit'])->name('students.edit');
Route::put('/student/{id}/update', [StudentController::class,'update'])->name('students.update');
Route::get('/student/{id}/show', [StudentController::class,'show'])->name('students.show');
Route::delete('student/{id}/delete',[StudentController::class,'destory'])->name('students.destroy');

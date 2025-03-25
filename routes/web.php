<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class, 'index'])->name('index');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/store', [TaskController::class, 'store'])->name('store');
Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [TaskController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');

// Route::resource('tasks', TaskController::class);




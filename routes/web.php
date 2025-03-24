<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('index');
});

route::resource('/', TaskController::class)->only(['index','create', 'store']);

// routes/web.php
Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');


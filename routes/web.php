<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::controller(JobController::class)->group(function(){
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destry');
});

Route::get('/register', [RegisteredUserController::class, 'create']); 

Route::view('/contact', 'contact');
<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

//
//Route::get('/jobs', [JobController::class, 'index']);
//Route::get('/jobs/create', [JobController::class, 'create']);
//Route::get('/jobs/{job}', [JobController::class, 'show']);
//Route::post('/jobs', [JobController::class, 'store']);
//Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
//Route::patch('/jobs/{job}', [JobController::class, 'update']);
//Route::delete('/jobs/{job}', [JobController::class, 'destroy']);



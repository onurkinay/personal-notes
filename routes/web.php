<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", [JobController::class,"index"]);
Route::get('/jobs/create', [JobController::class,'create']);
Route::post('/jobs', [JobController::class,'store']);
Route::get('/jobs/{id}', [JobController::class,'show']);
Route::get('/jobs/{id}/edit', [JobController::class,'edit']);
Route::patch('/jobs/{id}', [JobController::class,'update']);
Route::delete('/jobs/{id}', [JobController::class,'delete']);


Route::get('/contact', function () {
    return view('contact');
});

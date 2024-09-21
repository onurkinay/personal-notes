<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view("/", 'home');
Route::view('/contact', 'contact');
/*
Route::controller(JobController::class)->group(function (){
    Route::get("/jobs", "index");
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{id}', 'show');
    Route::get('/jobs/{id}/edit', 'edit');
    Route::patch('/jobs/{id}', 'update');
    Route::delete('/jobs/{id}', 'delete');
});*/

Route::resource('jobs',JobController::class);


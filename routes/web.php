<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
 
 

Route::get('/', [WelcomeController::class,'index']);
Route::get('/service', [ServiceController::class,'index']);
Route::get('/about', [AboutController::class,'index']);

Route::resource('/contact', ContactController::class);

 


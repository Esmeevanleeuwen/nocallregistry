<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {   return view('welcome');});
Route::post('/request-form', [RequestFormController::class, 'store']);
Route::post('/contact-form', [ContactFormController::class, 'store']);
Route::post('/request-form', [RequestFormController::class, 'store']);


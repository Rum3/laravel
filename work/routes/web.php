<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/registration', [StudentController::class ,'index']);
Route::post('/registration', [StudentController::class ,'store']);
Route::get('/list', [StudentController::class ,'list']);

Route::get('/edit/{id}', [StudentController::class ,'edit']);
Route::post('/update/{id}', [StudentController::class ,'update']);


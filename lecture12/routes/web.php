<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('contact');
});

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::get('/file/create', [FileController::class,'create'])->name('create');
Route::post('/file', [FileController::class,'store']);

Route::get('/file/download', 'FileController@download')->name('file.download');

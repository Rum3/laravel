<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
Route::fallback(function () {
    return view('index');
});
Route::get('/', function(){
    return view('index');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/register', 'showRegistrationForm');
    Route::post('/users', 'register');
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/users/login', 'login');
    Route::post('/logout', 'logout');
});

Route::controller(BookController::class)->group(function(){
    Route::get('/add/{id?}' , 'showAdd');
    Route::post('/add', 'addBook');
    Route::get('/edit/{id?}', 'editBook');
    Route::put('/books/{id?}', 'updateBook');
    Route::delete('/delete/{id}', 'deleteBook')->middleware('auth');
    Route::get('/book' , 'showBook')->name('book');
    Route::get('/search', 'searchByName');

});




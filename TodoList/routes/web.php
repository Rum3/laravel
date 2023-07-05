<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [TodoListController::class,'index'])->name('index');
Route::post('/', [TodoListController::class,'store'])->name('store');
Route::delete('/{todolist:id}', [TodoListController::class,'destroy'])->name('destroy');
Route::get('/tasks/{id}/edit', [TodoListController::class, 'edit'])->name('edit');
Route::put('/task/{id}', [TodoListController::class, 'update'])->name('update');
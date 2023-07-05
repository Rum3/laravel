<?php
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyController::class, 'showExchangeRates'])->name('exchange-rates');
Route::get('/search', [CurrencyController::class, 'searchExchangeRates'])->name('exchange-rates.search');



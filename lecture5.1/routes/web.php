<?php
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CurrencyController::class, 'showExchangeRates']);
Route::get('/exchange-rates', [CurrencyController::class, 'showExchangeRates']);


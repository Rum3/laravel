<?php
use App\Http\Controllers\Currency;
use Illuminate\Support\Facades\Route;


Route::get('/', [Currency::class, 'showExchangeRates']);

<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\CurrencyConversionService;

Route::get('/', function () {
    return view('view');
});

Route::post('/convert', function (Request $request) {
    $amount = $request->input('amount');

    $currencyService = app('currency');
    $convertedAmount = $currencyService->convertToEuro($amount);

    Session::flash('amountEuro', $convertedAmount);

    return redirect('/');
});

Route::post('/convertToLeva', function (Request $request) {
    $amountEuro = $request->input('amountEuro');

    $currencyService = app('currency');
    $convertedAmount = $currencyService->convertFromEuro($amountEuro);

    Session::flash('convertedAmount', $convertedAmount);

    return redirect('/');
});
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('view');
});

Route::post('/convert', function (Request $request) {
    $amount = $request->input('amount');

    $currencyService = app('currency');
    $convertedAmount = $currencyService->convertToEuro($amount);

    Session::flash('convertedAmount', $convertedAmount);

    return redirect('/');
});

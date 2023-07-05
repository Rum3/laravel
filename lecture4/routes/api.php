<?php
use Illuminate\Http\Request;
use App\CurrencyConversionService;
use Illuminate\Support\Facades\Route;

Route::post('/convertToLeva', function (Request $request) {
    $amountEuro = $request->input('amountEuro');

    $currencyService = app('currency');
    $convertedAmount = $currencyService->convertFromEuro($amountEuro);

    $data = ['convertedAmount' => $convertedAmount];
    $json = json_encode($data);

    file_put_contents('converted_amount.json', $json); 

    return response()->json($data, 200);
});
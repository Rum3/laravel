<?php
namespace App\Http\Controllers;

class Currency extends Controller
{
    public function showExchangeRates()
    {
     $exchangeRates = [
        'USD' => 1.85,
        'EUR' => 1.96,
        'GBP' => 2.2,
        ];

        return view('exchange_rates')->with('exchangeRates', $exchangeRates);
    }
}
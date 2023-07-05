<?php

namespace App;

class CurrencyConversionService
{
    public function convertToEuro($amount)
    {
        $exchangeRate = config('app.exchange_rate');
        $euroAmount = $amount / $exchangeRate;

        return round($euroAmount,2);
    }
    public function convertFromEuro($amountEuro)
    {
        $exchangeRate = config('app.exchange_rate');
        $amount = $amountEuro * $exchangeRate;

        return round($amount, 2);
    }
}
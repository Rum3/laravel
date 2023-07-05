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
}
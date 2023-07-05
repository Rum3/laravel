<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CurrencyConversionService;

class CurrencyConversionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('currency', function ($app) {
            return new CurrencyConversionService();
        });
    }
}

<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class CurrencyController extends Controller
{
    public function showExchangeRates()
    {
        $client = new Client();
        $response = $client->get('https://api.freecurrencyapi.com/v1/latest', [
            'query' => [
                'apikey' => 'PEQjXrVlWIMcmV3bvZCaq1QJSm5fjMOEbYMWYAPQ',
                'base_currency' => 'BGN',
            ],
        ]);
        $data = json_decode($response->getBody(), true);

        $exchangeRates = $data['data'];

        return view('welcome', compact('exchangeRates'));
    }
}


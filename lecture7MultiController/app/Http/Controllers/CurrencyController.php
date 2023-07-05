<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function showExchangeRates(Request $request)
    {
        $client = new Client();
        $response = $client->get('https://api.freecurrencyapi.com/v1/latest', [
            'query' => [
                'apikey' => 'PEQjXrVlWIMcmV3bvZCaq1QJSm5fjMOEbYMWYAPQ',
                'base_currency' => 'BGN',
            ],
        ]);
        $data = json_decode($response->getBody(), true);

        $exchangeName = $data['data'];

        $search = $request->input('search');

        if ($search) {
            $exchangeName = $this->searchExchangeName($exchangeName, $search);
        }

        return view('welcome', compact('exchangeName'));
    }

    private function searchExchangeName($exchangeName, $search)
    {
        $filteredName = [];

        foreach ($exchangeName as $currency => $rate) {
            if (stripos($currency, $search) !== false) {
                $filteredName[$currency] = $rate;
            }
        }

        return $filteredName;
    }
}


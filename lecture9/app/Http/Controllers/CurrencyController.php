<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Currency;

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

        // Извличане на данните за обменните курсове от отговора на API заявката
        $exchangeData = $data['data'];

        // Извличане на стойността на параметъра "search"
        $search = $request->input('search');

        // Дали има търсене на валути
        if ($search) {
            $exchangeData = $this->searchExchangeName($exchangeData, $search);
        }

        // Актуализиране или създаване на записи в базата данни за всяка валута
        foreach ($exchangeData as $currency => $rate) {
            Currency::updateOrCreate(['currency_code' => $currency], ['exchange_rate' => $rate]);
        }

        // Извличане на всички валути от базата данни
        $exchangeName = Currency::all();

        return view('welcome', compact('exchangeName'));
    }

    // "search"-а се счупи в този код ,не знам защо.В предния където изпозвах данните от API нямаше проблеми
    private function searchExchangeName($exchangeData, $search)
    {
        $filteredData = [];

        foreach ($exchangeData as $currency => $rate) {
            if (stripos($currency, $search) !== false) {
                $filteredData[$currency] = $rate;
            }
        }

        return $filteredData;
    }
}


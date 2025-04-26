<?php

namespace App\Services;

class CurrencyConverterService
{
    public function convert($from, $to, $amount)
    {
        // You can replace this with real API like ExchangeRate-API or use hardcoded for now
        $rate = $this->getExchangeRate($from, $to);
        return $amount * $rate;
    }

    private function getExchangeRate($from, $to)
    {
        // Dummy rates for example, including USD to NGN (1 USD = 1700 NGN)
        $rates = [
            'USD' => [
                'EUR' => 0.85,
                'GBP' => 0.75,
                'NGN' => 1700,  // 1 USD = 1700 NGN
            ],
            'EUR' => [
                'USD' => 1.18,
                'GBP' => 0.88,
                'NGN' => 2000,  // Example: 1 EUR = 2000 NGN
            ],
            'NGN' => [
                'USD' => 1 / 1700, // 1 NGN = 1/1700 USD
                'EUR' => 1 / 2000, // 1 NGN = 1/2000 EUR
            ],
        ];

        // Return the rate if found, else return 1 as a fallback (same currency)
        return $rates[$from][$to] ?? 1;
    }
}

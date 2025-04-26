<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CurrencyConverterService;

class CurrencyConverterController extends Controller
{
    protected $currencyConverter;

    public function __construct(CurrencyConverterService $currencyConverter)
    {
        $this->currencyConverter = $currencyConverter;
    }

    public function convert(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $amount = $request->query('amount', 1);

        if (!$from || !$to) {
            return response()->json(['error' => 'Missing parameters'], 400);
        }

        $convertedAmount = $this->currencyConverter->convert($from, $to, $amount);

        return response()->json([
            'from' => $from,
            'to' => $to,
            'original_amount' => $amount,
            'converted_amount' => round($convertedAmount, 2),
        ]);
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyConverterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authenticated User Route
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Group your API routes under 'v1' prefix (optional but good practice)
Route::prefix('v1')->group(function () {
    
    // Currency Converter API
    Route::get('/convert-currency', [CurrencyConverterController::class, 'convert']);
    // This route will handle the currency conversion requests
    
    // You can add more routes here later
    // Example:
    // Route::get('/some-other-endpoint', [SomeController::class, 'someMethod']);
});

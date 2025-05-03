<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('form');
});

Route::post('/calculate-time', function (Request $request) {
    $vehicleCount = $request->input('vehicle_count');

    // Send to Python AI API
    $response = Http::post('http://127.0.0.1:5000/predict', [
        'vehicle_count' => $vehicleCount,
    ]);

    $signalTime = $response->json()['signal_time'];

    return redirect('/')->with('signal_time', $signalTime);
});


// 👇 These two are for your traffic dashboard
Route::get('/dashboard', [TrafficController::class, 'index']);
Route::post('/predict', [TrafficController::class, 'predict']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('form'); // form.blade.php should exist in resources/views
});

Route::post('/calculate-time', function (Request $request) {
    $vehicleCount = $request->input('vehicle_count');
    $signalTime = $request->input('signal_time'); // Make sure this matches your input field name in the form

    return view('result', compact('vehicleCount', 'signalTime'));
});

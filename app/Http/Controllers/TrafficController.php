<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrafficController extends Controller
{
    public function index()
    {
        return view('traffic.dashboard');
    }

    public function predict(Request $request)
    {
        $vehicleCount = $request->input('vehicle_count');

        $response = Http::post('http://127.0.0.1:5000/predict', [
            'vehicle_count' => $vehicleCount
        ]);

        $data = $response->json();

        return view('traffic.dashboard', ['data' => $data]);
    }
}

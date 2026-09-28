<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingCenterController extends Controller
{
    private function fetchDataFromApi($url) {

        $baseUrl = env('URL_SERVER_API');
        $response = Http::get("{$baseUrl}/{$url}");

        return $response->json();
    }

    public function index() {
        
        $centros = $this->fetchDataFromApi('centers');

        return view('training_center.index', compact('centros'));
    }
}

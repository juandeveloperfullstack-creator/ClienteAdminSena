<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComputerController extends Controller
{
    private function fetchDataFromApi($url) {

        $baseUrl = env('URL_SERVER_API');
        $response = Http::get("{$baseUrl}/{$url}");

        return $response->json();
    }

    public function index() {
        
        $computadores = $this->fetchDataFromApi('computers');

        return view('computer.index', compact('computadores'));
    }
}

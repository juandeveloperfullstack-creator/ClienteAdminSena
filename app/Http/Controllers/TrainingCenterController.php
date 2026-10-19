<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingCenterController extends Controller
{
    private function fetchDataFromApi($url) {

        $response = Http::get($url);

        return $response->json();
    }

    public function index() {
        
        $url = env('URL_SERVER_API');

        $centros = $this->fetchDataFromApi($url . '/centers');

        return view('training_center.index', compact('centros'));
    }

    public function show($id) {

    $url = env('URL_SERVER_API');

    $centro = $this->fetchDataFromApi($url . '/centers/' . $id);

    return view('training_center.show', compact('centro'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $centro = Http::get($url .'/centers')->json();

        return view('training_center.create',compact('centro'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/centers', $request->all());

        return redirect()->route('training_center.index')->with('success', 'Centro creado correctamente.');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $center = $this->fetchDataFromApi($url . '/centers/' . $id);

        return view('training_center.edit', compact('center'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/centers/' . $id, $request->all());

        return redirect()->route('training_center.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/centers/' . $id);
        return redirect()->route('training_center.index');
    }
}

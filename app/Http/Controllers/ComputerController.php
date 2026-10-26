<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComputerController extends Controller
{
    private function fetchDataFromApi($url) {

        $response = Http::get($url);

        return $response->json();
    }

    public function index() {
        
        $url = env('URL_SERVER_API');

        $computadores = $this->fetchDataFromApi($url . '/computers');

        return view('computer.index', compact('computadores'));
    }

    public function show($id) {

    $url = env('URL_SERVER_API');

    $computer = $this->fetchDataFromApi($url . '/computers/' . $id);

    return view('computer.show', compact('computer'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $computer = Http::get($url .'/computers')->json();

        return view('computer.create',compact('computer'));
    }

    public function store(Request $request)
{
    $url = env('URL_SERVER_API');

    // petición HTTP para adjuntar archivos
    $http = Http::asMultipart();

    // Se verifica si el usuario seleccionó una imagen
    if ($request->hasFile('urlFoto')) {
        $file = $request->file('urlFoto');
        $http->attach(
            'urlFoto', // coincidir con el nombre que espera la API
            file_get_contents($file->getRealPath()),
            $file->getClientOriginalName()
        );
    }

    // Enviamos los demás campos junto con la petición POST a la API
    $response = $http->post($url . '/computers', [
        'number' => $request->number,
        'brand'  => $request->brand,
    ]);

    return redirect()->route('computer.index')->with('success', 'Computador creado correctamente');
}

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $compu = $this->fetchDataFromApi($url . '/computers/' . $id);

        return view('computer.edit', compact('compu'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/computers/' . $id, $request->all());

        return redirect()->route('computer.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/computers/' . $id);
        return redirect()->route('computer.index');
    }
}

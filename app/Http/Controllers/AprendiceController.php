<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AprendiceController extends Controller
{
    private function fetchDataFromApi($url) {

        $response = Http::get($url);

        return $response->json();
    }

    public function index() {
        
        $url = env('URL_SERVER_API');

        $aprendices = $this->fetchDataFromApi($url . '/aprendices');

        return view('aprendice.index', compact('aprendices'));
    }

    public function show($id) {

    $url = env('URL_SERVER_API');

    $aprendiz = $this->fetchDataFromApi($url . '/aprendices/' . $id);

    return view('aprendice.show', compact('aprendiz'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $courses = Http::get($url .'/courses')->json();
        $computers = Http::get($url .'/computers')->json();

        return view('aprendice.create',compact('courses', 'computers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/aprendices', $request->all());

        return redirect()->route('aprendice.index')->with('success', 'Aprendiz creado correctamente.');
    }

    public function edit($id)
{
    $url = env('URL_SERVER_API');

    // Quitamos el '/edit' del final de la URL
    $data = $this->fetchDataFromApi($url . '/aprendices/' . $id);

    $aprendice = $data['aprendice'];
    $compus = $data['computers'];

    $cursos = $this->fetchDataFromApi($url . '/courses');
    $centros = $this->fetchDataFromApi($url . '/centers');

    return view('aprendice.edit', compact('aprendice', 'compus', 'cursos', 'centros'));
}

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/aprendices/' . $id, $request->all());

        return redirect()->route('aprendice.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/aprendices/' . $id);
        return redirect()->route('aprendice.index');
    }
}

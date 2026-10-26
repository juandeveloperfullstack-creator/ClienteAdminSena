<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeacherController extends Controller
{
    private function fetchDataFromApi($url) {

        $response = Http::get($url);

        return $response->json();
    }

    public function index() {
        
        $url = env('URL_SERVER_API');

        $profes = $this->fetchDataFromApi($url . '/teachers');

        return view('teacher.index', compact('profes'));
    }

    public function show($id) {

    $url = env('URL_SERVER_API');

    $profesor = $this->fetchDataFromApi($url . '/teachers/' . $id);

    return view('teacher.show', compact('profesor'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $areas = Http::get($url .'/areas')->json();
        $centers = Http::get($url .'/centers')->json();

        return view('teacher.create',compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/teachers', $request->all());

        return redirect()->route('teacher.index')->with('success', 'Profesor creado correctamente.');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);
        $areas = $this->fetchDataFromApi($url . '/areas/');
        $centros = $this->fetchDataFromApi($url . '/centers/');

        return view('teacher.edit', compact('teacher', 'areas', 'centros'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/teachers/' . $id, $request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/teachers/' . $id);
        return redirect()->route('teacher.index');
    }
}

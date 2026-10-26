<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    private function fetchDataFromApi($url) {

        $response = Http::get($url);

        return $response->json();
    }

    public function index() {
        
        $url = env('URL_SERVER_API');

        $cursos = $this->fetchDataFromApi($url . '/courses');

        return view('course.index', compact('cursos'));
    }

    public function show($id) {

    $url = env('URL_SERVER_API');

    $curso = $this->fetchDataFromApi($url . '/courses/' . $id);

    return view('course.show', compact('curso'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $areas = Http::get($url .'/areas')->json();
        $centers = Http::get($url .'/centers')->json();

        return view('course.create',compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/courses', $request->all());

        return redirect()->route('course.index')->with('success', 'Curso creado correctamente.');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $course = $this->fetchDataFromApi($url . '/courses/' . $id);
        $areas = $this->fetchDataFromApi($url . '/areas/');
        $centros = $this->fetchDataFromApi($url . '/centers/');

        return view('course.edit', compact('course', 'areas', 'centros'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/courses/' . $id, $request->all());

        return redirect()->route('course.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/courses/' . $id);
        return redirect()->route('course.index');
    }
}

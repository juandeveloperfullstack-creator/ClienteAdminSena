@extends('layouts.app')

@section('content')
    @component('includes.modal-show', [
        'title' => 'Detalle del aprendiz #' . $aprendiz['id'],
        'backUrl' => route('aprendice.index'),
    ])
        <div class="mb-3">
            <label class="form-label text-muted fw-bold">ID:</label>
            <p class="fs-5">{{ $aprendiz['id'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Nombre del Aprendiz:</label>
            <p class="fs-5">{{ $aprendiz['name'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Correo del Aprendiz:</label>
            <p class="fs-5">{{ $aprendiz['email'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Numero del Aprendiz:</label>
            <p class="fs-5">{{ $aprendiz['cell_number'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Curso del Aprendiz:</label>
            <p class="fs-5">{{ $aprendiz['course']['course_number'] ?? 'Sin Curso' }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Computador del Aprendiz:</label>
            <p class="fs-5">{{ $aprendiz['computer']['brand'] ?? 'Sin Computador' }}</p>
        </div>
    @endcomponent
@endsection

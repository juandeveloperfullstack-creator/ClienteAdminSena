@extends('layouts.app')

@section('content')
    @component('includes.modal-show', [
        'title' => 'Detalle del profesor #' . $profesor['id'],
        'backUrl' => route('teacher.list'),
    ])
        <div class="mb-3">
            <label class="form-label text-muted fw-bold">ID:</label>
            <p class="fs-5">{{ $profesor['id'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Nombre del Profesor:</label>
            <p class="fs-5">{{ $profesor['name'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Correo del Profesor:</label>
            <p class="fs-5">{{ $profesor['email'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Area:</label>
            <p class="fs-5">{{ $profesor['area']['name'] ?? 'Sin Area' }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Centro de Formación:</label>
            <p class="fs-5">{{ $profesor['trainingCenter']['name'] ?? 'Sin Centro' }}</p>
        </div>
    @endcomponent
@endsection

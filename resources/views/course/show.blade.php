@extends('layouts.app')

@section('content')
    @component('includes.modal-show', [
        'title' => 'Detalle del curso #' . $curso['id'],
        'backUrl' => route('course.index'),
    ])
        <div class="mb-3">
            <label class="form-label text-muted fw-bold">ID:</label>
            <p class="fs-5">{{ $curso['id'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Numero de Curso:</label>
            <p class="fs-5">{{ $curso['course_number'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Dia:</label>
            <p class="fs-5">{{ $curso['day'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Area del curso:</label>
            <p class="fs-5">{{ $curso['area']['name'] ?? 'Sin Area' }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Centro de Formación:</label>
            <p class="fs-5">{{ $curso['trainingCenter']['name'] ?? 'Sin Centro' }}</p>
        </div>
    @endcomponent
@endsection

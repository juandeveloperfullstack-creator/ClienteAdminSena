@extends('layouts.app')

@section('content')
    @component('includes.modal-show', [
        'title' => 'Detalle del centro #' . $centro['id'],
        'backUrl' => route('training_center.list'),
    ])
        <div class="mb-3">
            <label class="form-label text-muted fw-bold">ID:</label>
            <p class="fs-5">{{ $centro['id'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Nombre del Centro:</label>
            <p class="fs-5">{{ $centro['name'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Ubicación:</label>
            <p class="fs-5">{{ $centro['location'] }}</p>
        </div>
    @endcomponent
@endsection

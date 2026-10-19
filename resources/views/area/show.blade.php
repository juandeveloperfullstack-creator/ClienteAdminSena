@extends('layouts.app')

@section('content')

@component('includes.modal-show', [
    'title' => 'Detalle del Área #' . $area['id'],
    'backUrl' => route('area.index')
])
    <div class="mb-3">
        <label class="fw-bold text-muted small">ID:</label>
        <p class="fs-5 mb-0">{{ $area['id'] }}</p>
    </div>
    <div class="mb-3">
        <label class="fw-bold text-muted small">Nombre del Área:</label>
        <p class="fs-5 mb-0">{{ $area['name'] }}</p>
    </div>
@endcomponent

@endsection
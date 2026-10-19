@extends('layouts.app')

@section('content')
    @component('includes.modal-show', [
        'title' => 'Detalle del computador #' . $computer['id'],
        'backUrl' => route('computer.list'),
    ])
        <div class="mb-3">
            <label class="form-label text-muted fw-bold">ID:</label>
            <p class="fs-5">{{ $computer['id'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Numero del Computador:</label>
            <p class="fs-5">{{ $computer['number'] }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label text-muted fw-bold">Marca:</label>
            <p class="fs-5">{{ $computer['brand'] }}</p>
        </div>
    @endcomponent
@endsection
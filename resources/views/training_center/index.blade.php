@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de centros de formación</strong></h2>

    <!-- Botón de acción fuera de la tabla -->
    <div class="mb-3">
        <a href="{{ route('training_center.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Centro
        </a>
    </div>

    <table id="idtraining_center" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($centros as $centro)
            <tr>
                <td>{{ $centro['id'] }}</td>
                <td>{{ $centro['name'] }}</td>
                <td>{{ $centro['location'] }}</td>
                <td>
                    <a href="{{ route('training_center.show', $centro['id']) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('training_center.edit', $centro['id']) }}" class="btn btn-sm btn-warning text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('training_center.destroy', $centro['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este centro?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
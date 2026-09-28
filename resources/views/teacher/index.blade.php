@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de profesores</strong></h2>

    <!-- Botón fuera de la tabla -->
    <div class="mb-3">
        <a href="{{ route('teacher.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Profesor
        </a>
    </div>

    <table id="idteacher" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profes as $profe)
            <tr>
                <td>{{ $profe['id'] }}</td>
                <td>{{ $profe['name'] }}</td>
                <td>{{ $profe['email'] }}</td>

                <td>{{ $profe['area']['name'] ?? 'Sin área' }}</td>
                <td>{{ $profe['training_center']['name'] ?? $profe['trainingCenter']['name'] ?? 'Sin centro' }}</td>

                <td>
                    <a href="{{ route('teacher.show', $profe['id']) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('teacher.edit', $profe['id']) }}" class="btn btn-sm btn-warning text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('teacher.destroy', $profe['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este profesor?')">
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
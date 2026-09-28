@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de aprendices</strong></h2>

    <div class="mb-3">
        <a href="{{ route('aprendice.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Aprendiz
        </a>
    </div>

    <table id="idaprendice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Número de celular</th>
                <th>Curso asignado</th>
                <th>Computador asignado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aprendices as $aprendice)
            <tr>
                <td>{{ $aprendice['id'] }}</td>
                <td>{{ $aprendice['name'] }}</td>
                <td>{{ $aprendice['email'] }}</td>
                <td>{{ $aprendice['cell_number'] }}</td>

                <!-- Acceso a relaciones como arrays anidados -->
                <td>{{ $aprendice['course']['course_number'] ?? 'Sin curso' }}</td>
                <td>{{ $aprendice['computer']['brand'] ?? 'Sin Computador' }}</td>

                <td>
                    <a href="{{ route('aprendice.show', $aprendice['id']) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('aprendice.edit', $aprendice['id']) }}" class="btn btn-warning btn-sm text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('aprendice.destroy', $aprendice['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este aprendiz?')">
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
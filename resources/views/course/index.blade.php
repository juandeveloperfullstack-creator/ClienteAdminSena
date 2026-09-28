@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de cursos</strong></h2>

    <!-- Botón fuera de la tabla -->
    <div class="mb-3">
        <a href="{{ route('course.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Curso
        </a>
    </div>

    <table id="idcourse" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número de curso</th>
                <th>Día</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso['id'] }}</td>
                <td>{{ $curso['course_number'] }}</td>
                <td>{{ $curso['day'] }}</td>

                <!-- Relaciones en formato de array asociativo -->
                <td>{{ $curso['area']['name'] ?? 'Sin área' }}</td>
                <td>{{ $curso['training_center']['name'] ?? $curso['trainingCenter']['name'] ?? 'Sin centro' }}</td>

                <td>
                    <a href="{{ route('course.show', $curso['id']) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('course.edit', $curso['id']) }}" class="btn btn-sm btn-warning text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('course.destroy', $curso['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este curso?')">
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
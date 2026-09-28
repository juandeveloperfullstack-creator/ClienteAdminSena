@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de áreas</strong></h2>

    <div class="mb-3">
        <a href="{{ route('area.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nueva Área
        </a>
    </div>

    <table id="idarea" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>
                <td>
                    <a href="{{ route('area.show', $area['id']) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('area.edit', $area['id']) }}" class="btn btn-sm btn-warning text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('area.destroy', $area['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta área?')">
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
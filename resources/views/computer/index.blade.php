@extends('layouts.app')

@section('content')
<div class="p-4 bg-white rounded-3 shadow-sm">
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de computadores</strong></h2>

    <!-- Botón fuera de la tabla -->
    <div class="mb-3">
        <a href="{{ route('computer.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Computador
        </a>
    </div>

    <table id="idcomputer" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($computadores as $computador)
            <tr>
                <td>{{ $computador['id'] }}</td>
                <td>{{ $computador['number'] }}</td>
                <td>{{ $computador['brand'] }}</td>
                <td>
                    <img
                        src="{{ asset('storage/images/' . $computador['urlFoto']) }}"
                        alt="Imagen del producto"
                        width="80"
                        height="80"
                        style="object-fit: cover; border-radius: 5px;"
                    >
                </td>
                <td>
                    <a href="{{ route('computer.show', $computador['id']) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('computer.edit', $computador['id']) }}" class="btn btn-sm btn-warning text-white">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('computer.destroy', $computador['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este computador?')">
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
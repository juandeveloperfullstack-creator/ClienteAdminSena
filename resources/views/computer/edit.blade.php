@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Editar Computador #{{ $compu['id'] }}</h4>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('computer.update', $compu['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Número del Computador -->
                        <div class="mb-3">
                            <label for="number" class="form-label fw-semibold text-secondary small">
                                Número del computador:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-pc-display"></i>
                                </span>
                                <input type="number" name="number" id="number" class="form-control border-start-0" value="{{ old('number', $compu['number']) }}" placeholder="Ej: 101" required>
                            </div>
                        </div>

                        <!-- Marca -->
                        <div class="mb-3">
                            <label for="brand" class="form-label fw-semibold text-secondary small">
                                Marca:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-laptop"></i>
                                </span>
                                <input type="text" name="brand" id="brand" class="form-control border-start-0" value="{{ old('brand', $compu['brand']) }}" placeholder="Ej: Lenovo, HP, Dell" required>
                            </div>
                        </div>

                        <!--Campo de Imagen y previsualización de la actual -->
                        <div class="mb-4">
                            <label for="urlFoto" class="form-label fw-semibold text-secondary small">
                                Imagen del Computador:
                            </label>
                            
                            @if(!empty($compu['urlFoto']))
                                <div class="mb-2">
                                    <span class="d-block text-muted small mb-1">Imagen actual:</span>
                                    <img src="{{ $compu['urlFoto'] }}" alt="Foto actual" width="100" class="rounded border">
                                </div>
                            @endif

                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-image"></i>
                                </span>
                                <input type="file" name="urlFoto" id="urlFoto" class="form-control border-start-0" accept="image/*">
                            </div>
                            <small class="text-muted">Déjalo en blanco si no deseas cambiar la imagen.</small>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('computer.list') }}" class="btn btn-outline-secondary px-4 fw-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="btn text-white px-4 fw-bold" style="background-color: #39a900;">
                                Actualizar Equipo
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
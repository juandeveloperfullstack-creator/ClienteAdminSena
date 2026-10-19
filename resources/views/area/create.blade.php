@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <!-- Tarjeta de Formulario -->
            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado con Verde SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Registrar Nueva Área</h4>
                </div>

                <!-- Cuerpo del Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('area.store') }}" method="POST">
                        @csrf

                        <!-- Campo Nombre de Área -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold text-dark">
                                <i class="fas fa-layer-group text-success me-1"></i> Nombre del Área:
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                placeholder="Ej: Sistemas, Agroindustria..."
                                value="{{ old('name') }}"
                                required>

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('area.index') }}" class="btn btn-outline-secondary px-4 fw-medium">
                                <i class="fas fa-arrow-left me-1"></i> Cancelar
                            </a>
                            <button type="submit" class="btn text-white px-4 fw-bold" style="background-color: #39a900;">
                                <i class="fas fa-save me-1"></i> Guardar Área
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

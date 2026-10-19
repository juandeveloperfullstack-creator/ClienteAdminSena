@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Registrar Centro de Formación</h4>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('training_center.store') }}" method="POST">
                        @csrf

                        <!-- Campo Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-secondary small">
                                Nombre del centro de formación:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-building"></i>
                                </span>
                                <input type="text" name="name" id="name" class="form-control border-start-0" placeholder="Ej: Centro de Comercio y Servicios" required>
                            </div>
                        </div>

                        <!-- Campo Localización -->
                        <div class="mb-4">
                            <label for="location" class="form-label fw-semibold text-secondary small">
                                Localización:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>
                                <input type="text" name="location" id="location" class="form-control border-start-0" placeholder="Ej: Popayán, Cauca" required>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('training_center.list') }}" class="btn btn-outline-secondary px-4 fw-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="btn text-white px-4 fw-bold" style="background-color: #39a900;">
                                Guardar Centro
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

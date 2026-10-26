@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Registrar Profesor / Instructor</h4>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('teacher.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-secondary small">
                                Nombre del profesor:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" name="name" id="name" class="form-control border-start-0" placeholder="Ej: Carlos Pérez" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-secondary small">
                                Correo Electrónico:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control border-start-0" placeholder="ejemplo@sena.edu.co" required>
                            </div>
                        </div>

                        <!-- Área -->
                        <div class="mb-3">
                            <label for="area_id" class="form-label fw-semibold text-secondary small">
                                Selecciona el área:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-layers-fill"></i>
                                </span>
                                <select name="area_id" id="area_id" class="form-select border-start-0" required>
                                    <option value="" disabled selected>Selecciona un área...</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}">{{ $area['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Centro de Formación -->
                        <div class="mb-4">
                            <label for="training_center_id" class="form-label fw-semibold text-secondary small">
                                Selecciona un centro de formación:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-building"></i>
                                </span>
                                <select name="training_center_id" id="training_center_id" class="form-select border-start-0" required>
                                    <option value="" disabled selected>Selecciona un centro...</option>
                                    @foreach ($centers as $center)
                                        <option value="{{ $center['id'] }}">{{ $center['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('teacher.list') }}" class="btn btn-outline-secondary px-4 fw-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="btn text-white px-4 fw-bold" style="background-color: #39a900;">
                                Guardar Profesor
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Editar Profesor #{{ $teacher['id'] }}</h4>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('teacher.update', $teacher['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nombre del Profesor -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-secondary small">
                                Nombre del Profesor:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" name="name" id="name" class="form-control border-start-0" value="{{ old('name', $teacher['name']) }}" placeholder="Ej: Carlos Pérez" required>
                            </div>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-secondary small">
                                Correo Electrónico:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control border-start-0" value="{{ old('email', $teacher['email']) }}" placeholder="ejemplo@sena.edu.co" required>
                            </div>
                        </div>

                        <!-- Área -->
                        <div class="mb-3">
                            <label for="area_id" class="form-label fw-semibold text-secondary small">
                                Área:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-layers-fill"></i>
                                </span>
                                <select name="area_id" id="area_id" class="form-select border-start-0" required>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}" {{ $teacher['area_id'] == $area['id'] ? 'selected' : '' }}>
                                            {{ $area['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Centro de Formación -->
                        <div class="mb-4">
                            <label for="training_center_id" class="form-label fw-semibold text-secondary small">
                                Centro de Formación:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-building"></i>
                                </span>
                                <select name="training_center_id" id="training_center_id" class="form-select border-start-0" required>
                                    @foreach ($centros as $centro)
                                        <option value="{{ $centro['id'] }}" {{ $teacher['training_center_id'] == $centro['id'] ? 'selected' : '' }}>
                                            {{ $centro['name'] }}
                                        </option>
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
                                Actualizar Profesor
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

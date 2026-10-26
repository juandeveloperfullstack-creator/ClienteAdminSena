@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">

                <!-- Encabezado SENA -->
                <div class="card-header text-white text-center py-3" style="background-color: #39a900;">
                    <h4 class="mb-0 fw-bold">Registrar Aprendiz</h4>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="{{ route('aprendice.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-secondary small">
                                Nombre completo:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" name="name" id="name" class="form-control border-start-0" placeholder="Ej: Juan Pérez" required>
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

                        <!-- Número de celular -->
                        <div class="mb-3">
                            <label for="cell_number" class="form-label fw-semibold text-secondary small">
                                Número de celular:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>
                                <input type="text" name="cell_number" id="cell_number" class="form-control border-start-0" placeholder="Ej: 3001234567" required>
                            </div>
                        </div>

                        <!-- Curso -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label fw-semibold text-secondary small">
                                Selecciona el curso:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                </span>
                                <select name="course_id" id="course_id" class="form-select border-start-0" required>
                                    <option value="" disabled selected>Selecciona un curso...</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course['id'] }}">{{ $course['course_number'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Computador -->
                        <div class="mb-4">
                            <label for="computer_id" class="form-label fw-semibold text-secondary small">
                                Selecciona un computador:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-pc-display"></i>
                                </span>
                                <select name="computer_id" id="computer_id" class="form-select border-start-0" required>
                                    <option value="" disabled selected>Selecciona un computador...</option>
                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer['id'] }}">Equipo N° {{ $computer['number'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <a href="{{ route('aprendice.index') }}" class="btn btn-outline-secondary px-4 fw-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="btn text-white px-4 fw-bold" style="background-color: #39a900;">
                                Guardar Aprendiz
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

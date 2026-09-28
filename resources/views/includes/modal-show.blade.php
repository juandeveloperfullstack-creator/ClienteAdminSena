<div class="modal-backdrop-custom d-flex align-items-center justify-content-center">
    <div class="card shadow-lg border-0 rounded-3 my-auto" style="max-width: 500px; width: 100%;">
        
        <!-- Encabezado con Verde SENA -->
        <div class="card-header text-white py-3" style="background-color: #39a900;">
            <h5 class="mb-0 fw-bold">{{ $title }}</h5>
        </div>

        <!-- Contenido dinámico -->
        <div class="card-body p-4">
            {{ $slot }}
        </div>

        <!-- Botón Volver -->
        <div class="card-footer bg-light text-end py-3">
            <a href="{{ $backUrl }}" class="btn btn-secondary px-4">Regresar a la lista</a>
        </div>

    </div>
</div>
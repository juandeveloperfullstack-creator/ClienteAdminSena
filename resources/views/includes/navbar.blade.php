<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #39a900;">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center fw-bold text-white" href="/">
            <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA" width="40" height="40" class="me-2">
            AdminSena
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center me-3">

    <!-- Enlace Inicio -->
    <li class="nav-item mx-1">
        <a class="nav-link px-3 {{ request()->is('/') ? 'active-nav-item' : 'text-white' }}" href="/">
            Inicio
        </a>
    </li>

    <!-- Menú Desplegable de Módulos / Tablas -->
    <li class="nav-item dropdown mx-1">
        <a class="nav-link dropdown-toggle px-3 text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestión Administrativa
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('area.*') ? 'fw-bold text-success' : '' }}" href="{{ route('area.index') }}">
                    <i class="bi bi-diagram-3 me-2 text-success"></i> Áreas
                </a>
            </li>
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('training_center.*') ? 'fw-bold text-success' : '' }}" href="{{ route('training_center.index') }}">
                    <i class="bi bi-building me-2 text-success"></i> Centros de Formación
                </a>
            </li>
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('computer.*') ? 'fw-bold text-success' : '' }}" href="{{ route('computer.index') }}">
                    <i class="bi bi-pc-display me-2 text-success"></i> Computadores
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('teacher.*') ? 'fw-bold text-success' : '' }}" href="{{ route('teacher.index') }}">
                    <i class="bi bi-person-badge me-2 text-success"></i> Profesores
                </a>
            </li>
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('course.*') ? 'fw-bold text-success' : '' }}" href="{{ route('course.index') }}">
                    <i class="bi bi-journal-bookmark me-2 text-success"></i> Cursos
                </a>
            </li>
            <li>
                <a class="dropdown-item py-2 {{ request()->routeIs('aprendice.*') ? 'fw-bold text-success' : '' }}" href="{{ route('aprendice.index') }}">
                    <i class="bi bi-people me-2 text-success"></i> Aprendices
                </a>
            </li>
        </ul>
    </li>

    <!-- Botón Iniciar Sesión -->
    <li class="nav-item mx-1">
        <a href="{{ url('/login') }}" class="btn btn-light text-success fw-bold ms-2 shadow-sm">
            <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar Sesión
        </a>
    </li>

</ul>


            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>

        </div>
    </div>
</nav>

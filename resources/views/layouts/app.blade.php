<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena</title>
    @include('includes.dependencias')
</head>
<style>
    
    .modal-backdrop-custom {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        z-index: 1050;
        padding: 20px;
    }
</style>
<body class="d-flex flex-column min-vh-100" style="background-color: #eef7f2;">

    @include('includes.navbar')

    <style>

    .active-nav-item {
        background-color: #ffffff !important;
        color: #39a900 !important;
        font-weight: bold;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    }
</style>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <main class="flex-fill container my-5">
        @yield('content')
    </main>

    @include('includes.footer')

    @include('includes.dependenciasbody')

</body>
</html>

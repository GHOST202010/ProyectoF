<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de proveedores</title>


    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.bundle.js'])
</head>

<body class="bg-body text-dark d-flex flex-column min-vh-100 border border-primary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-1 text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ $titulo }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Proveedores
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/supplier/create">Agregar</a></li>
                            <li><a class="dropdown-item" href="/supplier">Menú proveedores</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Facturas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/invoice/create">Agregar</a></li>
                            <li><a class="dropdown-item" href="/invoice">Menú facturas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pedidos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/order/create">Agregar</a></li>
                            <li><a class="dropdown-item" href="/order">Menú pedidos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Regalos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/gift/create">Agregar</a></li>
                            <li><a class="dropdown-item" href="/gift">Menú Regalos</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Iniciar sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Registrarse</a>
                    </li>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container my-1 mt-auto">

        <footer class="bg-dark text-center text-white mt-auto">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Information -->
                <section class="mb-4">
                    <p>Proyecto 2</p>
                </section>
                <!-- Section: Information-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <p>Robinson Ian Cabrera Hernandez</p>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- End of .container -->
</body>


</html>

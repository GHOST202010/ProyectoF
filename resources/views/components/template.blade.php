<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.bundle.js'])
</head>

<body class="bg-body text-dark d-flex flex-column min-vh-100">
    <x-navbar titulo="{{ $titulo }}"></x-navbar>
    {{ $slot }}
    <x-footer></x-footer>
</body>


</html>

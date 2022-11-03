<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de proveedores</title>
    @vite('resources/css/bootstrap.css')
</head>

<body class="bg-body text-dark">
    <h1>{{$titulo}}</h1>
    {{$slot}}
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de proveedores</title>
</head>

<body>
    <h1>Listado de proveedores</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Frecuencia</th>
            <th>Teléfono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        @foreach ($suppliers as $provedor)
        <tr>
            <td>{{$provedor->name}}</td>
            <td>{{$provedor->periodicity}}</td>
            <td>{{$provedor->telephone}}</td>
            <td><a href="/supplier/{{$provedor->id}}/edit">Editar</a></td>
            <td>
                <form action="/supplier/{{$provedor->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>

        @endforeach
    </table>

</body>

</html>
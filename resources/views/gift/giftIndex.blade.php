<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de regalos</title>
</head>

<body>
    <h1>Listado de Regalos</h1>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Más información</th>
        </tr>

        @foreach ($gift as $single)
        <tr>
            <td>{{$single->type}}</td>
            <td>{{$single->amount}}</td>
            <td>{{$single->price}}</td>
            <td><a href="/gift/{{$single->id}}">Más información</a>
            </td>
        </tr>

        @endforeach
    </table>

</body>

</html>
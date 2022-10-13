<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de facturas</title>
</head>

<body>
    <h1>Facturas</h1>

    <table>
        <tr>
            <th>Estatus</th>
            <th>Costo</th>
            <th>Fecha de creación</th>
            <th>Provedor</th>
            <th>Más información</th>
        </tr>

        @foreach ($invoice as $single)
        <tr>
            <td>{{$single->status}}</td>
            <td>{{$single->price}}</td>
            <td>{{$single->date}}</td>
            <td>{{$single->supplier}}</td>
            <td><a href="/invoice/{{$single->id}}">Revisar</a></td>
        </tr>

        @endforeach
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regalos</title>
</head>

<body>
    <h1>Información sobre la factura</h1>
    <table>
        <tr>
            <th>
                Regalo
            </th>
            <th>
                Costo
            </th>
            <th>
                Cantidad disponibles
            </th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>
                {{$gift->type}}
            </td>
            <td>
                {{$gift->price}}
            </td>
            <td>
                {{$gift->amount}}
            </td>
            <td><a href="/gift/{{$gift->id}}/edit">Editar</a></td>
            <td>
                <form action="/gift/{{$gift->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>

    </table>
</body>

</html>
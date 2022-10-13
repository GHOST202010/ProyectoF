<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de pedidos</title>
</head>

<body>
    <h1>Pedidos</h1>

    <table>
        <tr>
            <th>Nombre del cliente</th>
            <th>Teléfono del cliente</th>
            <th>Descripción del pedido</th>
            <th>Costo del pedido</th>
            <th>Dinero por adelantado</th>
            <th>Fecha de entrega</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        @foreach ($order as $single)
        <tr>
            <td>{{$single->customer_name}}</td>
            <td>{{$single->telephone}}</td>
            <td>{{$single->description}}</td>
            <td>{{$single->cost}}</td>
            <td>{{$single->money_up_front}}</td>
            <td>{{$single->delivery}}</td>
            <td><a href="/order/{{$single->id}}/edit">Editar</a></td>
            <td>
                <form action="/order/{{$single->id}}" method="post">
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
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Creacion de pedidos</h1>
    <form action="/order" method="post">
        @csrf
        <label for="name">Nombre del cliente:</label>
        <input type="text" name="customer_name" id="" value="{{old('customer_name') ?? ''}}">
        <br>
        <label for="telephone">Teléfono del cliente:</label>
        <input type="tel" name="telephone" id="" pattern="[0-9]{10}" value="{{old('telephone') ?? ''}}">
        <br>
        <label for="description">Descripción del pedido:</label>
        <textarea name="description">{{old('customer_name') ?? ''}}</textarea>
        <br>
        <label for="cost">Precio del pedido:</label>
        <input type="number" name="cost" id="" value="{{old('cost') ?? ''}}">
        <br>
        <label for="money_up_front">Dinero por adelantado:</label>
        <input type="number" name="money_up_front" id="" value="{{old('money_up_front') ?? ''}}">
        <br>
        <label for="delivery">Fecha de entrega:</label>
        <input type="datetime-local" name="delivery" id="" value="{{old('delivery') ?? ''}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
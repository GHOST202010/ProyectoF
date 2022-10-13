<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Regalos</title>
</head>

<body>
    <form action="/gift" method="post">
        @csrf
        <label for="amount">Cantidad:</label>
        <input type="number" name="amount" id="" value="{{old('amount') ?? ''}}" placeholder="Cantidad">
        <br>
        <label for="price">Precio del regalo:</label>
        <input type="number" name="price" id="" value="{{old('price') ?? ''}}" placeholder="Cantidad de dinero">
        <br>
        <label for="type">Tipo de regalo:</label>
        <input type="text" name="type" id="" value="{{old('type') ?? ''}}" placeholder="(Oso de peluche, gorra, etc.)">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
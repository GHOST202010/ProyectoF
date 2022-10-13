<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Creacion de provedores</h1>
    <form action="/supplier" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="">
        <label for="periodicity">Periodicidad:</label>
        <input type="text" name="periodicity" id="">
        <label for="telephone">Telefono:</label>
        <input type="text" name="telephone" id="">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
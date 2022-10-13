<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear facturas</title>
</head>

<body>
    <form action="/invoice" method="post">
        @csrf
        <label for="name">Nombre del provedor:</label>
        <select name="name" id="">
            <option value="{{old('name') ?? ''}}" selected>{{old('name') ?? '-'}}</option>
            @foreach ($supplier as $single)
            @if(old('name') && old('name')!=$single->name)
            <option value="{{$single->name}}">{{$single->name}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="status">Estado de la factura:</label>
        <input type="text" name="status" id="" value="{{old('status') ?? ''}}" placeholder="Pagado, no pagado">
        <br>
        <label for="price">Total a pagar:</label>
        <input type="number" name="price" id="" value="{{old('price') ?? ''}}" placeholder="Cantidad de dinero">
        <br>
        <label for="date">Fecha de la factura:</label>
        <input type="date" name="date" id="" value="{{old('date') ?? ''}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
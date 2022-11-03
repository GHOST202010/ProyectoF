<x-template titulo="Editar facturas">
    <form action="/gift/{{$gift->id}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Nombre del provedor:</label>
        <select name="name" id="">
            <option value="{{$invoice->supplier}}" selected>{{$invoice->supplier}}</option>
            @foreach ($supplier as $single)
            @if($invoice->supplier!=$single->name)
            <option value="{{$single->name}}">{{$single->name}}</option>
            @endif
            @endforeach
        </select>
        <br>
        <label for="status">Estado de la factura:</label>
        <input type="text" name="status" id="" value="{{old('status') ?? $invoice->status}}" placeholder="Pagado, no pagado">
        <br>
        <label for="price">Total a pagar:</label>
        <input type="number" name="price" id="" value="{{old('price') ?? $invoice->price}}" placeholder="Cantidad de dinero">
        <br>
        <label for="date">Fecha de la factura:</label>
        <input type="date" name="date" id="" value="{{old('date') ?? $invoice->date}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-template>
<x-template titulo="Editar pedido">
    <h1>Edición de pedidos</h1>
    <form action="/order/{{$order->id}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Nombre del cliente:</label>
        <input type="text" name="customer_name" id="" value="{{old('customer_name') ?? $order->customer_name}}">
        <br>
        <label for="telephone">Teléfono del cliente:</label>
        <input type="tel" name="telephone" id="" pattern="[0-9]{10}" value="{{old('telephone') ?? $order->telephone}}">
        <br>
        <label for="description">Descripción del pedido:</label>
        <textarea name="description">{{old('description') ?? $order->description}}</textarea>
        <br>
        <label for="cost">Precio del pedido:</label>
        <input type="text" name="cost" id="" value="{{old('cost') ?? $order->cost}}">
        <br>
        <label for="money_up_front">Dinero por adelantado:</label>
        <input type="text" name="money_up_front" id="" value="{{old('money_up_front') ?? $order->money_up_front}}">
        <br>
        <label for="delivery">Fecha de entrega:</label>
        <input type="datetime-local" name="delivery" id="" value="{{old('delivery') ?? $order->delivery}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</x-template>
<x-template titulo="Editar pedido">
    <h1 class="text-center">Edición de pedidos</h1>
    <form action="/order/{{ $order->id }}" method="post" class="container">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="customer_name">Nombre del cliente:</label>
            <input type="text" name="customer_name" class="form-control" id=""
                value="{{ old('customer_name') ?? $order->customer_name }}">
            @error('customer_name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Teléfono del cliente:</label>
            <input type="tel" name="telephone" class="form-control" id="" pattern="[0-9]{10}"
                value="{{ old('telephone') ?? $order->telephone }}">
            @error('telephone')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción del pedido:</label>
            <textarea name="description" class="form-control">{{ old('description') ?? $order->description }}</textarea>
            @error('description')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="cost">Precio del pedido:</label>
            <input type="text" name="cost" class="form-control" id=""
                value="{{ old('cost') ?? $order->cost }}">
            @error('cost')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="money_up_front">Dinero por adelantado:</label>
            <input type="text" name="money_up_front" class="form-control"s id=""
                value="{{ old('money_up_front') ?? $order->money_up_front }}">
            @error('money_up_front')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="delivery">Fecha de entrega:</label>
            <input type="datetime-local" name="delivery" class="form-control" id=""
                value="{{ old('delivery') ?? $order->delivery }}">
            @error('delivery')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary my-1 justify-content-center">Guardar</button>
        </div>
    </form>
</x-template>

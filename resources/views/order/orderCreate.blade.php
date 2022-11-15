<x-template titulo="Crear pedido">
    <h1 class="text-center">Creacion de pedidos</h1>
    <form action="/order" method="post" class="container">
        @csrf
        <div class="form-group">
            <label for="customer_name">Nombre del cliente:</label>
            <input type="text" name="customer_name"class="form-control" value="{{ old('customer_name') ?? '' }}">
            @error('customer_name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Teléfono del cliente:</label>
            <input type="tel" name="telephone" class="form-control" class="form-control"
                value="{{ old('telephone') ?? '' }}">
            @error('telephone')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción del pedido:</label>
            <textarea name="description" class="form-control">{{ old('customer_name') ?? '' }}</textarea>
            @error('description')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="cost">Precio del pedido:</label>
            <input type="number" name="cost" class="form-control" value="{{ old('cost') ?? '' }}">
            @error('cost')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="money_up_front">Dinero por adelantado:</label>
            <input type="number" name="money_up_front" class="form-control" value="{{ old('money_up_front') ?? '' }}">
            @error('money_up_front')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="delivery">Fecha de entrega:</label>
            <input type="datetime-local" name="delivery" class="form-control" value="{{ old('delivery') ?? '' }}">
            @error('delivery')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary my-1 justify-content-center">Guardar</button>
        </div>

    </form>
</x-template>

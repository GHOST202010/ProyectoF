<x-template titulo="Editar regalo">
    <h1 class="text-center">Edición de regalos</h1>
    <form action="/gift/{{ $gift->id }}" method="post" class="container">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="amount" class="form-label">Cantidad:</label>
            <input type="number" name="amount" class="form-control" value="{{ old('amount') ?? $gift->amount }}"
                placeholder="Cantidad">
        </div>
        <div class="form-group">
            <label for="price" class="form-label">Precio del regalo:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') ?? $gift->price }}"
                placeholder="Cantidad de dinero">
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Tipo de regalo:</label>
            <input type="text" name="type" class="form-control" value="{{ old('type') ?? $gift->type }}"
                placeholder="(Oso de peluche, gorra, etc.)">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-1 justify-content-center">Guardar</button>
        </div>
    </form>
</x-template>

<x-template titulo="Crear regalos">
    <h1 class="text-center">Creación de regalos</h1>
    <form action="/gift" method="post" class="container">
        @csrf
        <div class="form-group">
            <label for="type" class="form-label">Tipo de regalo:</label>
            <input type="text" name="type" class="form-control" value="{{ old('type') ?? '' }}"
                placeholder="(Oso de peluche, gorra, etc.)">
            @error('type')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="amount" class="form-label">Cantidad:</label>
            <input type="number" name="amount" class="form-control" value="{{ old('amount') ?? '' }}"
                placeholder="Cantidad">
            @error('amount')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-label">Precio del regalo:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') ?? '' }}"
                placeholder="Cantidad de dinero">
            @error('price')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-1 justify-content-center">Guardar</button>
        </div>
    </form>
</x-template>

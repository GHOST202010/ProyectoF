<x-template titulo="Crear provedores">
    <h1 class="text-center">Creación de provedores</h1>
    <form action="/supplier" method="post" class="container">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') ?? '' }}">
        </div>
        <div class="form-group">
            <label for="periodicity">Periodicidad:</label>
            <input type="text" name="periodicity" class="form-control" value="{{ old('periodicity') ?? '' }}">
        </div>
        <div class="form-group">
            <label for="telephone">Telefono:</label>
            <input type="text" name="telephone" class="form-control" value="{{ old('telephone') ?? '' }}"
                pattern="[0-9]{10}">
            <small class="form-text text-muted">Ejemplo: 123456789</small>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-1 justify-content-center">Guardar</button>
        </div>
    </form>
</x-template>

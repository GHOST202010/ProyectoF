<x-template titulo="Editar proveedores">
    <h1 class="text-center">Edición de proveedores</h1>
    <div class="container">
        <form action="/supplier/{{ $supplier->id }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" id=""
                    value="{{ old('name') ?? $supplier->name }}">
            </div>
            <div class="form-group">
                <label for="periodicity">Periodicidad:</label>
                <input type="text" name="periodicity" class="form-control" id=""
                    value="{{ old('periodicity') ?? $supplier->periodicity }}">
            </div>
            <div class="form-group">
                <label for="telephone">Telefono:</label>
                <input type="text" name="telephone" class="form-control" id=""
                    value="{{ old('telephone') ?? $supplier->telephone }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-1 justify-content-center">Guardar</button>
            </div>
        </form>
    </div>
</x-template>

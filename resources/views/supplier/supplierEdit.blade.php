<x-template titulo="Editar provedores">
    <h1>Edición de provedores</h1>
    <form action="/supplier/{{$supplier->id}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="" value="{{old('name') ?? $supplier->name}}">
        <label for="periodicity">Periodicidad:</label>
        <input type="text" name="periodicity" id="" value="{{old('periodicity') ?? $supplier->periodicity}}">
        <label for="telephone">Telefono:</label>
        <input type="text" name="telephone" id="" value="{{old('telephone') ?? $supplier->telephone}}">
        <input type="submit" value="Guardar">
    </form>
</x-template>
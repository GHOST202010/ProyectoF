<x-template titulo="Crear provedores">
    <h1>Creacion de provedores</h1>
    <form action="/supplier" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="">
        <label for="periodicity">Periodicidad:</label>
        <input type="text" name="periodicity" id="">
        <label for="telephone">Telefono:</label>
        <input type="text" name="telephone" id="">
        <input type="submit" value="Guardar">
    </form>
</x-template>
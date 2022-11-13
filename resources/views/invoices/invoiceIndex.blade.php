<x-template titulo="Listado de facturas">
    <h1>Facturas</h1>

    <x-table>
        <tr>
            <th>Estatus</th>
            <th>Costo</th>
            <th>Fecha de creación</th>
            <th>Provedor</th>
            <th>Más información</th>
        </tr>

        @foreach ($invoice as $single)
            <tr>
                <td>{{ $single->status }}</td>
                <td>{{ $single->price }}</td>
                <td>{{ $single->date }}</td>
                <td>{{ $single->supplier->name }}</td>
                <td><a href="/invoice/{{ $single->id }}">Revisar</a></td>
            </tr>
        @endforeach
    </x-table>
</x-template>

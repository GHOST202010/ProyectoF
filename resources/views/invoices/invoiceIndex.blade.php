<x-template titulo="Listado de facturas">
    <h1 class="text-center">Facturas</h1>

    <x-table>
        <tr>
            <th>Estatus</th>
            <th>Costo</th>
            <th>Fecha de creación</th>
            <th>Proveedor</th>
            <th>Más información</th>
        </tr>

        @foreach ($invoice as $single)
            <tr>
                <td>{{ $single->status }}</td>
                <td>${{ $single->price }}</td>
                <td>{{ $single->date }}</td>
                <td class="text-capitalize">{{ $single->supplier->name }}</td>
                <td>
                    <x-link.show url="/invoice/{{ $single->id }}"></x-link.show>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-template>

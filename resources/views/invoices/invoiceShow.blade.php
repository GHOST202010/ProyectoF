<x-template titulo="Mostrar factura">
    <h1 class="text-center">Información sobre la factura</h1>
    <x-table>
        <tr>
            <th>
                Nombre del proveedor
            </th>
            <th>
                Precio del pedido
            </th>
            <th>
                Fecha de creación de la nota
            </th>
            <th>
                Estado de la nota
            </th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>
                {{ $invoice->supplier->name }}
            </td>
            <td>
                ${{ $invoice->price }}
            </td>
            <td>
                {{ $invoice->date }}
            </td>
            <td>
                {{ $invoice->status }}
            </td>
            <td>
                <x-link.edit url="/invoice/{{ $invoice->id }}/edit"></x-link.edit>
            </td>
            <td>
                <x-form.delete url="/invoice/{{ $invoice->id }}"></x-form.delete>
            </td>
        </tr>
    </x-table>
</x-template>

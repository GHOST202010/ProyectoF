<x-template titulo="Listado de pedidos">
    <h1 class="text-center">Pedidos</h1>
    <x-table>
        <tr class="border-bottom">
            <th class="ml-2">Nombre del cliente</th>
            <th class="ml-2">Descripción del pedido</th>
            <th class="ml-2">Costo del pedido</th>
            <th class="ml-2">Fecha de entrega</th>
            <th class="ml-2">Más información</th>
        </tr>

        @foreach ($order as $single)
            <tr>
                <td>{{ $single->customer_name }}</td>
                <td>{{ $single->description }}</td>
                <td>{{ $single->cost }}</td>
                <td>{{ $single->delivery }}</td>
                <td>
                    <x-link.show url="/order/{{ $single->id }}"></x-link.show>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-template>

<x-template titulo="Mostrar pedido">
    <h1>Información de los pedidos</h1>
    <x-table>
        <tr class="border-bottom">
            <th class="ml-2">Nombre del cliente</th>
            <th class="ml-2">Teléfono del cliente</th>
            <th class="ml-2">Descripción del pedido</th>
            <th class="ml-2">Costo del pedido</th>
            <th class="ml-2">Dinero por adelantado</th>
            <th class="ml-2">Fecha de entrega</th>
            <th class="ml-2">Editar</th>
            <th class="ml-2">Eliminar</th>
        </tr>
        <tr>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->telephone }}</td>
            <td>{{ $order->description }}</td>
            <td>${{ $order->cost }}</td>
            <td>{{ $order->money_up_front }}</td>
            <td>{{ $order->delivery }}</td>
            <td>
                <x-link.edit url="/order/{{ $order->id }}/edit"></x-link.edit>
            </td>
            <td>
                <x-form.delete url="/order/{{ $order->id }}">
                </x-form.delete>
            </td>
        </tr>
    </x-table>
</x-template>

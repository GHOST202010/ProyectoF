<x-template titulo="Listado de pedidos">
    <h1 class="text-center">Pedidos</h1>
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

        @foreach ($order as $single)
            <tr>
                <td>{{ $single->customer_name }}</td>
                <td>{{ $single->telephone }}</td>
                <td>{{ $single->description }}</td>
                <td>{{ $single->cost }}</td>
                <td>{{ $single->money_up_front }}</td>
                <td>{{ $single->delivery }}</td>
                <td><a href="/order/{{ $single->id }}/edit">Editar</a></td>
                <td>
                    <form action="/order/{{ $single->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-template>

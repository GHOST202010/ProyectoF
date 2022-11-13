<x-template titulo="Listado de regalos">
    <h1>Listado de Regalos</h1>
    <x-table>
        <tr class="border-bottom">
            <th scope="col">Tipo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        @foreach ($gift as $single)
            <tr class="border-bottom">
                <td>{{ $single->type }}</td>
                <td>{{ $single->amount }}</td>
                <td>{{ $single->price }}</td>
                <td>
                    <x-link.editar url="/gift/{{ $single->id }}/edit"></x-link.editar>
                </td>
                <td>
                    <x-form.eliminar url="/gift/{{ $single->id }}">
                    </x-form.eliminar>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-template>

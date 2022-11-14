<x-template titulo="Mostrar regalo">
    <h1 class="text-center">Información sobre el regalo</h1>
    <x-table>
        <tr>
            <th>
                Regalo
            </th>
            <th>
                Costo
            </th>
            <th>
                Cantidad disponibles
            </th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>
                {{ $gift->type }}
            </td>
            <td>
                ${{ $gift->price }}
            </td>
            <td>
                {{ $gift->amount }}
            </td>
            <td>
                <x-link.edit url="/gift/{{ $gift->id }}/edit">Editar</x-link.edit>
            </td>
            <td>
                <x-form.delete url="/gift/{{ $gift->id }}"></x-form.delete>
            </td>
        </tr>
    </x-table>
</x-template>

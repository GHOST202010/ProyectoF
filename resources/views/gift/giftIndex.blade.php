<x-template titulo="Regalos">
    <h1 class="text-center">Listado de Regalos</h1>
    <x-table>
        <tr class="border-bottom">
            <th scope="col">Tipo</th>
            <th scope="col">Precio</th>
            <th scope="col">Más información</th>
        </tr>
        @foreach ($gift as $single)
            <tr class="border-bottom">
                <td>{{ $single->type }}</td>
                <td>${{ $single->price }}</td>
                <td>
                    <x-link.show url="/gift/{{ $single->id }}"></x-link.show>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-template>

<x-template titulo="Proveedores">
    <h1 class="text-center">Lista de los proveedores</h1>
    <x-table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Frecuencia</th>
                <th>Más información</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $provedor)
                <tr>
                    <td>{{ $provedor->name }}</td>
                    <td>{{ $provedor->periodicity }}</td>
                    <td>
                        <x-link.show url="/supplier/{{ $provedor->id }}">
                        </x-link.show>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-template>

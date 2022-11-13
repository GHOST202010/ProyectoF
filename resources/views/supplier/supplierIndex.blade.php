<x-template titulo="Provedores">
    <x-table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Frecuencia</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $provedor)
                <tr>
                    <td>{{ $provedor->name }}</td>
                    <td>{{ $provedor->periodicity }}</td>
                    <td>{{ $provedor->telephone }}</td>
                    <td><a href="/supplier/{{ $provedor->id }}/edit" class="btn btn-info">Editar</a></td>
                    <td>
                        <x-form.eliminar url="/supplier/{{ $provedor->id }}">
                        </x-form.eliminar>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</x-template>

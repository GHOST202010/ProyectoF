<x-template titulo="Mostrar proveedor">
    <h1 class="text-center">Información de los proveedores</h1>
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
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->periodicity }}</td>
                <td>{{ $supplier->telephone }}</td>
                <td>
                    <x-link.edit url="/supplier/{{ $supplier->id }}/edit">
                    </x-link.edit>
                </td>
                <td>
                    <x-form.delete url="/supplier/{{ $supplier->id }}"></x-form.delete>
                </td>
            </tr>
        </tbody>
    </x-table>
</x-template>

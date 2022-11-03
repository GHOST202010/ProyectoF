<x-template titulo="Mostrar factura">
    <h1>Información sobre la factura</h1>
    <table>
        <tr>
            <th>
                Nombre del provedor
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
                {{$invoice->supplier}}
            </td>
            <td>
                {{$invoice->price}}
            </td>
            <td>
                {{$invoice->date}}
            </td>
            <td>
                {{$invoice->status}}
            </td>
            <td><a href="/gift/{{$single->id}}/edit">Editar</a></td>
            <td>
                <form action="/gift/{{$single->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>

    </table>
</x-template>
<x-template titulo="Mostrar regalo">
    <h1>Información sobre el regalo</h1>
    <table>
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
                {{$gift->type}}
            </td>
            <td>
                {{$gift->price}}
            </td>
            <td>
                {{$gift->amount}}
            </td>
            <td><a href="/gift/{{$gift->id}}/edit">Editar</a></td>
            <td>
                <form action="/gift/{{$gift->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    </table>
</x-template>
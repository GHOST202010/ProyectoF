<x-template titulo="Listado de regalos">
    <h1>Listado de Regalos</h1>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Más información</th>
        </tr>

        @foreach ($gift as $single)
        <tr>
            <td>{{$single->type}}</td>
            <td>{{$single->amount}}</td>
            <td>{{$single->price}}</td>
            <td><a href="/gift/{{$single->id}}">Más información</a>
            </td>
        </tr>

        @endforeach
    </table>

</x-template>
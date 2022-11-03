<x-template titulo="Listado de provedores">
    <div class="container">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container-fluid">
                <a href="" class="navbar-brand ms-5">Inicio</a>
            </div>
            <div class="container-fluid">
                <a href="" class="navbar-brand ms-5">Gym</a>
            </div>
            <div class="container-fluid">
                <a href="" class="navbar-brand ms-5">prueba</a>
            </div>
        </nav>
    </div>
    <div class="row justify-content-center my-2">
        <div class="col-auto">
            <table class="table table-hover table-dark w-auto">
                <tr>
                    <th>Nombre</th>
                    <th>Frecuencia</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                @foreach ($suppliers as $provedor)
                <tr>
                    <td>{{$provedor->name}}</td>
                    <td>{{$provedor->periodicity}}</td>
                    <td>{{$provedor->telephone}}</td>
                    <td><a href="/supplier/{{$provedor->id}}/edit" class="btn btn-info">Editar</a></td>
                    <td>
                        <form action="/supplier/{{$provedor->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
</x-template>
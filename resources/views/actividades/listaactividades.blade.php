<table>
    <thead>
        <tr>
            <th>Actividad</th>
            <th>Descripcion</th>
            <th>Leccion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ac as $item)
        <tr>
            <td>{{$item->actividad}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->leccion->leccion}}</td>
            <td>
                <div>
                    <a href="/actividades/editar/{{$item->id}}" class="btn btn-success btn-sm"></a>
                    <form action="{{url('niveles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                        @csrf()
                        @method('DELETE')
                        <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"></a>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

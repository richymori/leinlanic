<table>
    <thead>
        <tr>
            <th>Leccion</th>
            <th>Descripcion</th>
            <th>Nivel</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lc as $item)
        <tr>
            <td>{{$item->leccion}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->nivel->nivel}}</td>
            <td>
                <div>
                    <a href="/lecciones/editar/{{$item->id}}" class="btn btn-success btn-sm"></a>
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

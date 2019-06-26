<table>
    <thead>
        <tr>
            <th>Nivel</th>
            <th>Descripcion</th>
            <th>Curso</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nv as $item)
        <tr>
            <td>{{$item->nivel}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->curso->curso}}</td>
            <td>
                <div>
                    <a href="/niveles/editar/{{$item->id}}" class="btn btn-success btn-sm"></a>
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

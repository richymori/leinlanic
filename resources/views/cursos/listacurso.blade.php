<table >
    <thead >
        <tr>
            <th>Curso</th>
            <th>Lengua</th>
            <th>Desarrollador</th>
        </tr>
    </thead>

    <tbody>
             @foreach ($rs as $item)
        <tr>
            <td>{{$item->curso}}</td>
            <td>{{$item->lengua->lengua}}</td>
            <td>{{$item->desarrollador->nombres}}</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="/cursos/editar/{{$item->id}}" class="btn btn-success btn-sm">editar</a>
                    <a href="/cursos/crear" class="btn btn-success btn-sm">crear</a>
                <form action="{{url('cursos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
             @csrf()
             @method('DELETE')
                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm">elimkinar</a>
                </form>
               </div>
            </td>
         </tr>
         @endforeach
    </tbody>
</table>

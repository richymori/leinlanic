<table class="table table-hover">
    <thead>
        <tr>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>SEXO</th>
            <th>RECINTO</th>
            <th>CARRERA</th>
            <th>AREA</th>
            <th>MODALIDAD</th>
            <th>ETNIA</th>
            <th>DOMICILIO</th>
            <th>NACIONALIDAD</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
                <td>{{$item->nombres}}</td>
                <td>{{$item->apellidos}}</td>
                <td>{{$item->sexo->sexo}}</td>
                <td>{{$item->recinto->recinto}}</td>
                <td>{{$item->carrera->carrera}}</td>
                <td>{{$item->area->area}}</td>
                <td>{{$item->modalidad->modalidad}}</td>
                <td>{{$item->etnia->etnia}}</td>
                <td>{{$item->domicilio->domicilio}}</td>
                <td>{{$item->nacionalidad->nacionalidad}}</td>
              
            <td>
            <a href="/perfiles/editar/{{$item->id}}">Editar</a>
            <form action="{{url('perfiles/list', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
            @csrf()
            @method('DELETE')
        <a href="javascript:{}" Onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
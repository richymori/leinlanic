<h1> lista desarrolladores</h1>
<table>
    <thead>
        <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->telefono}}</td>


        <td>
         <div>
            <a href="/desarrolladores/editar/{{$item->id}}" class="btn btn-success btn-sm">editar</a>
            <form action="{{url('desarrolladores', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                @csrf()
                @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm">eliminar</i></a>
            </form>
         </div>
        </td>
       </tr>
@endforeach

 </tbody>
</table>

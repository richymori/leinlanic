<h1> crear curso </h1>
<form action="{{url('/cursos')}}" method="POST" role="form">
    @csrf()
    <div class="form-group">
        <label for="">Curso</label>
        <input type="text" class="form-control" id="curso" name="curso" placeholder="Escriba el curso">
    </div>

    <div class="form-group">
        <label for="">Desarrollador</label>
        <select name="desarrollador_id" class="form-control">
            <option value="">seleccione</option>
            @foreach($desarrolladores as $item)
            <option value=" {{$item->id}}">{{$item->nombres}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Lenguas</label>
        <select name="lengua_id" class="form-control">
            <option value="">seleccione</option>
            @foreach($lenguas as $item)
            <option value=" {{$item->id}}">{{$item->lengua}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

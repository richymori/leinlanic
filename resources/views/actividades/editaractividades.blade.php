<form action="{{url('actividades', $actividad->id)}}" method="POST" role="form">
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="">Actividad</label>
        <input value="{{$actividad->actividad}}" name="nivel" type="text" class="form-control" id="actividad" placeholder="Ingrese Actividad">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea value="{{$nivel->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Leccion</label>
        <select name="leccion_id" class="form-control" required="required">
            <option value="">seleccione la actividad</option>
            @foreach($lecciones as $item)
            <option value="{{$item->id}}">{{$item->leccion}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

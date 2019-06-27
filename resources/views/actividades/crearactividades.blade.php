<form action="{{url('/actividades')}}" method="POST" role="form">
    @csrf()
    <div class="form-group">
        <label for="">Actividad</label>
        <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Escriba la leccion">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Leccion</label>
        <select name="leccion_id" class="form-control">
            <option value="">seleccione</option>
            @foreach($lecciones as $item)
            <option value=" {{$item->id}}">{{$item->leccion}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

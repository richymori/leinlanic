<form action="{{url('/lecciones')}}" method="POST" role="form">
    @csrf()
    <div class="form-group">
        <label for="">Leccion</label>
        <input type="text" class="form-control" id="leccion" name="leccion" placeholder="Escriba la leccion">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Nivel</label>
        <select name="nivel_id" class="form-control>
            <option value="">seleccione</option>
            @foreach($niveles as $item)
            <option value=" {{$item->id}}">{{$item->nivel}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

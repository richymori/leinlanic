<form action="{{url('leccones', $leccion->id)}}" method="POST" role="form">
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="">Leccion</label>
        <input value="{{$leccion->nivel}}" name="nivel" type="text" class="form-control" id="nivel" placeholder="Ingrese el Nivel">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea value="{{$leccion->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Nivle</label>
        <select name="nivel_id" class="form-control" required="required">
            <option value="">seleccione el curso</option>
            @foreach($niveles as $item)
            <option value="{{$item->id}}">{{$item->nivel}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

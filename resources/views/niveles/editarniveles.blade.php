<form action="{{url('niveles', $nivel->id)}}" method="POST" role="form">
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="">Nivel</label>
        <input value="{{$nivel->nivel}}" name="nivel" type="text" class="form-control" id="nivel" placeholder="Ingrese el Nivel">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea value="{{$nivel->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Curso</label>
        <select name="curso_id" class="form-control" required="required">
            <option value="">seleccione el curso</option>
            @foreach($cursos as $item)
            <option value="{{$item->id}}">{{$item->curso}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

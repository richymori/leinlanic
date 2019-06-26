<form action="{{url('/niveles')}}" method="POST" role="form">
    @csrf()
    <div class="form-group">
        <label for="">Nivel</label>
        <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Escriba el Nivel">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="">Curso</label>
        <select name="curso_id" class="form-control">
            <option value="">seleccione</option>
            @foreach($cursos as $item)
            <option value="{{$item->id}}">{{$item->curso}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

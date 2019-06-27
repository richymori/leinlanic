
<form action="{{url('modalidades', $modalidad->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar Modalidad</legend>
  </div>
    <div class="form-group">
        <label for="">Digite la Modalidad</label>
        <input value="{{$modalidad->modalidad}}" name="modalidad" type="text" class="form-control" id="modalidad" placeholder="Escriba la Modalidad">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>



<form action="{{url('sexos', $sexo->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar sexo</legend>
  </div>
    <div class="form-group">
        <label for="">Digite el sexo</label>
        <input value="{{$sexo->sexo}}" name="sexo" type="text" class="form-control" id="sexo" placeholder="Escriba el sexo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


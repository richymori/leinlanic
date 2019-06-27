
<form action="{{url('recintos', $recinto->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar Recinto</legend>
  </div>
    <div class="form-group">
        <label for="">Digite el Recinto</label>
        <input value="{{$recinto->recinto}}" name="recinto" type="text" class="form-control" id="recinto" placeholder="Escriba el recinto">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


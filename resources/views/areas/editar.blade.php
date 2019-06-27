
<form action="{{url('areas', $area->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar Area</legend>
  </div>
    <div class="form-group">
        <label for="">Digite la Area</label>
        <input value="{{$area->area}}" name="area" type="text" class="form-control" id="area" placeholder="Escriba la area">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


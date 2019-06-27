
<form action="{{url('domicilios', $domicilio->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar domicilio</legend>
  </div>
    <div class="form-group">
        <label for="">Digite la domicilio</label>
        <input value="{{$domicilio->area}}" name="domicilio" type="text" class="form-control" id="domicilio" placeholder="Escriba la area">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


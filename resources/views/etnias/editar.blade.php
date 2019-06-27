
<form action="{{url('etnias', $etnia->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar etnia</legend>
  </div>
    <div class="form-group">
        <label for="">Digite la etnias</label>
        <input value="{{$etnia->etnia}}" name="etnia" type="text" class="form-control" id="etnia" placeholder="Escriba la etnia">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


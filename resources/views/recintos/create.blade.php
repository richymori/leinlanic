
<div class="col-sm">
<form action="{{url('/recintos')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar Recinto</legend>

        <div class="form-group">
            <label for="">Digite el tipo de Recinto</label>
            <input type="text" class="form-control" id="recinto" name="recinto" placeholder="Escriba el tipo de Recinto">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

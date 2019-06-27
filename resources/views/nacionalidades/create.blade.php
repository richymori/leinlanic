
<div class="col-sm">
<form action="{{url('/nacionalidades')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar Nacionalidad</legend>

        <div class="form-group">
            <label for="">Digite el tipo de Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Escriba el tipo de Nacionalidad">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

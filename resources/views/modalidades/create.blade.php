
<div class="col-sm">
<form action="{{url('/modalidades')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar Modalidad</legend>

        <div class="form-group">
            <label for="">Digite el tipo de Modalidad</label>
            <input type="text" class="form-control" id="modalidad" name="modalidad" placeholder="Escriba el tipo de Modalidad">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

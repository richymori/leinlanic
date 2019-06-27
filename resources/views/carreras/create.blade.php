
<div class="col-sm">
<form action="{{url('/carreras')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar carrera</legend>

        <div class="form-group">
            <label for="">Digite el tipo de carrera</label>
            <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Escriba el tipo de Carrera">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

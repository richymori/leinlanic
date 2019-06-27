
<div class="col-sm">
<form action="{{url('/areas')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar Area</legend>

        <div class="form-group">
            <label for="">Digite el tipo de carrera</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Escriba el tipo de Area">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


<div class="col-sm">
<form action="{{url('/domicilios')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar domicilio</legend>

        <div class="form-group">
            <label for="">Digite el  domicilio</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Escriba el tipo de Domicilio">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

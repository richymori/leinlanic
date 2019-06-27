
<div class="col-sm">
<form action="{{url('/sexos')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar sexo</legend>

        <div class="form-group">
            <label for="">Digite el tipo de Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Escriba el tipo de sexo">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

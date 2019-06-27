
<div class="col-sm">
<form action="{{url('/etnias')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar etnias</legend>

        <div class="form-group">
            <label for="">Digite el tipo de carrera</label>
            <input type="text" class="form-control" id="etnia" name="etnia" placeholder="Escriba el tipo de etnia">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

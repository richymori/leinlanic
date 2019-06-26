<form action="{{url('/cursos')}}" method="POST" role="form">
    @csrf()
    <div class="form-group">
        <label for="">Curso</label>
        <input type="text" class="form-control" id="curso" name="curso" placeholder="Escriba el Curso">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

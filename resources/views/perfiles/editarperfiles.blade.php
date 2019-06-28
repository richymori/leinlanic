<form action="{{url('perfiles', $perfil->id )}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><strong>PERFIL</strong></legend>

        <div class="form-group">
            <label for="">Nombre</label>
            <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingresar Nuevo Nombre">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingresar Nuevo Apellido">
        </div>
        <div class="form-group">
            <label for="">Sexo</label>
            <input value="{{$perfil->sexo_id}}" name="sexo_id" type="text" class="form-control" id="sexo_id" placeholder="Ingresar Sexo">
        </div>
        <div class="form-group">
            <label for="">Recinto</label>
            <input value="{{$perfil->recinto_id}}" name="recinto_id" type="text" class="form-control" id="recinto_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Carrera</label>
            <input value="{{$perfil->carrera_id}}" name="carrera_id" type="text" class="form-control" id="carrera_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Area</label>
            <input value="{{$perfil->area_id}}" name="area_id" type="text" class="form-control" id="area_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Modalidad</label>
            <input value="{{$perfil->modalidad_id}}" name="modalidad_id" type="text" class="form-control" id="modalidad_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Etnia</label>
            <input value="{{$perfil->etnia_id}}" name="etnia_id" type="text" class="form-control" id="etnia_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Domicilio</label>
            <input value="{{$perfil->domicilio_id}}" name="domicilio_id" type="text" class="form-control" id="domicilio_id" placeholder="Ingresar">
        </div>
        <div class="form-group">
            <label for="">Nacionalidad</label>
            <input value="{{$perfil->nacionalidad_id}}" name="nacionalidad_id" type="text" class="form-control" id="nacionalidad_id" placeholder="Ingresar">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</body>
</html>
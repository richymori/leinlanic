@extends('layouts.estilos')
@section('content')
<div class="card col-md-4 mx-auto p-1 shadow-lg bgc bordec">
    <div class="card-header">
        <h1 class="text-center fuente1"> CREAR NIVELES </h1>
    </div>
    <div class="card-body">
        <form action="{{url('/niveles')}}" method="POST" role="form">
            @csrf()
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Seleccionne el curso</label>
                    <select name="curso_id" class="form-control">
                        <option value="">seleccione</option>
                        @foreach($cursos as $item)
                        <option value="{{$item->id}}">{{$item->curso}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="">Titulo Nivel</label>
                    <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Escriba el Nivel">
                </div>
            </div>

            <div class="form-group">
                <label for="">Descripción</label>
                <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
            </div>
            <div class="d-flex justify-content-center rounded-circle">
            <button type="submit" class="btn btn-primary btn-lg rounded-circle"><i class="fas fa-thumbs-up"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

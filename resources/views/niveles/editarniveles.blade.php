@extends('layouts.estilos')
@section('content')

<div class="card col-md-4 mx-auto p-1 shadow-lg bgc bordec">
    <div class="card-header">
        <h1 class="text-center fuente1">Editar {{$nivel->nivel}}</h1>
    </div>
    <div class="card-body">
        <form action="{{url('niveles', $nivel->id)}}" method="POST" role="form">
            @csrf()
            @method('PATCH')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Curso</label>
                    <select name="curso_id" class="form-control" required="required">
                        <option value="">seleccione el curso</option>
                        @foreach($cursos as $item)
                        <option value="{{$item->id}}">{{$item->curso}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="">Nivel</label>
                    <input value="{{$nivel->nivel}}" name="nivel" type="text" class="form-control" id="nivel" placeholder="Ingrese el Nivel">
                </div>
            </div>


            <div class="form-group">
                <label for="">Descripción</label>
                <textarea value="{{$nivel->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
            </div>
            <div class="d-flex justify-content-center rounded-circle">
            <a href="/niveles/lista" class="btn btn-primary btn-lg rounded-circle"><i class="fas fa-chevron-circle-left"></i></a>
            <button type="submit" class="btn btn-primary btn-lg rounded-circle ml-2"><i class="fas fa-thumbs-up"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

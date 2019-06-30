@extends('layouts.estilos')
@section('content')


<div class="card col-md-4 mx-auto p-1 shadow-lg bgc bordec">
    <div class="card-header">
        <h1 class="text-center fuente2">Editar {{$curso->curso}}</h1>
    </div>
    <div class="card-body">
        <form action="{{url('cursos', $curso->id)}}" method="POST" role="form">
            @csrf()
            @method('PATCH')
            <div class="form-group">
                <label for="">Curso</label>
                <input value="{{$curso->curso}}" name="curso" type="text" class="form-control text-center" id="curso" placeholder="Ingresar Nuevo Registro">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Desarrollador</label>
                    <select name="desarrollador_id" class="form-control" required="required">
                        <option value="">seleccione</option>
                        @foreach($desarrolladores as $item)
                        <option value="{{$item->id}}">{{$item->nombres}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="">Lengua aprender</label>
                    <select name="lengua_id" class="form-control" required="required">
                        <option value="">{{$curso->lengua->lengua}}</option>
                        @foreach($lenguas as $item)
                        <option value="{{$item->id}}">{{$item->lengua}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center rounded-circle">
                <a href="/cursos/lista" class="btn btn-primary btn-lg rounded-circle"><i class="fas fa-chevron-circle-left"></i></a>
                <button type="submit" class="btn btn-primary btn-lg rounded-circle ml-2"><i class="fas fa-thumbs-up"></i></button>
            </div>
        </form>
    </div>
</div>

@endsection

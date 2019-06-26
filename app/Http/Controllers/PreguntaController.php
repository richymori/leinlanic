<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;
use App\TipoPregunta;
use App\Actividad;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pregunta::with([
            'tipo_pregunta',
            'actividad'
        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipopreguntas = TipoPregunta::all();
        $actividades = Actividad::all();

        return view('preguntas.crearpregunta', compact('tipopreguntas', 'actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta =new Pregunta();
        $pregunta ->titulo = $request['titulo'];
        $pregunta ->pregunta = $request['pregunta'];
        $pregunta ->imagen = $request['imagen'];
        $pregunta ->tipo_pregunta_id = $request['tipo_pregunta_id'];
        $pregunta ->actividad_id = $request['actividad_id'];
        $pregunta->save();
        return redirect('preguntas/lista');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        return $pregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        $tipopreguntas = TipoPregunta::all();
        $actividades = Actividad::all();

        return view('preguntas.editarpregunta',['pregunta'=> $pregunta], compact('tipopreguntas', 'actividades'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        $pregunta ->titulo = $request['titulo'];
        $pregunta ->pregunta = $request['pregunta'];
        $pregunta ->imagen = $request['imagen'];
        $pregunta ->tipo_pregunta_id = $request['tipo_pregunta_id'];
        $pregunta ->actividad_id = $request['actividad_id'];
        $pregunta->save();
        return redirect('preguntas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        $pregunta->delete();
        return redirect('preguntas/lista');
    }


    public function list()
    {
       $rs= $this->index();
       return view('preguntas.listapregunta', ['rs'=> $rs]);
    }
}

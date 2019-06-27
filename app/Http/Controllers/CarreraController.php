<?php

namespace App\Http\Controllers;

use App\carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = carrera::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carreras.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrera = new  Carrera();
        $carrera->carrera = $request['carrera'];
        $carrera->save();
        return redirect('carreras/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(carrera $carrera, $id)
    {
        $registroEncontrado = Carrera::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(carrera $carrera)
    {
        return view('carreras/editar', ['carrera' => $carrera]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carrera $carrera)
    {
        $carrera->carrera = $request['carrera'];
        $carrera->save();
        return redirect('carreras/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(carrera $carrera)
    {
        $carrera->delete();
        return redirect('carreras/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('carreras/lista', ['rs' => $rs]);
    }
}

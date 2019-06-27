<?php

namespace App\Http\Controllers;

use App\Nacionalidad;
use Illuminate\Http\Request;

class NacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Nacionalidad::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nacionalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nacionalidad = new  Nacionalidad();
        $nacionalidad->nacionalidad = $request['nacionalidad'];
        $nacionalidad->save();
        return redirect('nacionalidades/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function show(Nacionalidad $nacionalidad)
    {
        $registroEncontrado = Nacionalidad::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacionalidad $nacionalidad)
    {
        return view('nacionalidades/editar', ['nacionalidad' => $nacionalidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacionalidad $nacionalidad)
    {
        $nacionalidad->nacionalidad = $request['nacionalidad'];
        $nacionalidad->save();
        return redirect('nacionalidades/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidad $nacionalidad)
    {
        $nacionalidad->delete();
        return redirect('nacionalidades/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('nacionalidades/lista', ['rs' => $rs]);
    }

}

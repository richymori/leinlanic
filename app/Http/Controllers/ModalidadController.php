<?php

namespace App\Http\Controllers;

use App\Modalidad;
use Illuminate\Http\Request;

class ModalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Modalidad::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modalidad = new  Modalidad();
        $modalidad->modalidad = $request['modalidad'];
        $modalidad->save();
        return redirect('modalidades/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function show(Modalidad $modalidad, $id)
    {
        $registroEncontrado = Modalidad::find($id);
        return $registroEncontrado;

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Modalidad $modalidad)
    {
        return view('modalidades/editar', ['modalidad' => $modalidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modalidad $modalidad)
    {
        $modalidad->modalidad = $request['modalidad'];
        $modalidad->save();
        return redirect('modalidades/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modalidad $modalidad)
    {
        $modalidad->delete();
        return redirect('modalidades/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('modalidades/lista', ['rs' => $rs]);
    }
    }


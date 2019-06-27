<?php

namespace App\Http\Controllers;

use App\Etnia;
use Illuminate\Http\Request;

class EtniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = etnia::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etnias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etnia = new  Etnia();
        $etnia->etnia = $request['etnia'];
        $etnia->save();
        return redirect('etnias/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etnia  $etnia
     * @return \Illuminate\Http\Response
     */
    public function show(Etnia $etnia, $id)
    {
        $registroEncontrado = Etnia::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etnia  $etnia
     * @return \Illuminate\Http\Response
     */
    public function edit(Etnia $etnia)
    {
        return view('etnias/editar', ['etnia' => $etnia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etnia  $etnia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etnia $etnia)
    {
        $etnia->etnia = $request['etnia'];
        $etnia->save();
        return redirect('etnias/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etnia  $etnia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etnia $etnia)
    {
        $etnia->delete();
        return redirect('etnias/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('etnias/lista', ['rs' => $rs]);
    }
}

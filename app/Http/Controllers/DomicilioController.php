<?php

namespace App\Http\Controllers;

use App\Domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $qs = domicilio::all();

        return $qs;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('domicilios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domicilio = new  Domicilio();
        $domicilio->domicilio = $request['domicilio'];
        $domicilio->save();
        return redirect('domicilios/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio, $id)
    {
        $registroEncontrado = Domicilio::find($id);
        return $registroEncontrado;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilio $domicilio)
    {
        return view('domicilios/editar', ['domicilio' => $domicilio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domicilio $domicilio)
    {
        $domicilio->domicilio = $request['domicilio'];
        $domicilio->save();
        return redirect('domicilios/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();
        return redirect('domicilios/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('domicilios/lista', ['rs' => $rs]);
    }
}

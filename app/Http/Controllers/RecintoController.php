<?php

namespace App\Http\Controllers;

use App\Recinto;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Recinto::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recintos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recinto = new  Recinto();
        $recinto->recinto = $request['recinto'];
        $recinto->save();
        return redirect('recintos/list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recinto  $recinto
     * @return \Illuminate\Http\Response
     */
    public function show(Recinto $recinto, $id)
    {
        $registroEncontrado = Recinto::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recinto  $recinto
     * @return \Illuminate\Http\Response
     */
    public function edit(Recinto $recinto)
    {
        return view('recintos/editar', ['recinto' => $recinto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recinto  $recinto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recinto $recinto)
    {
        $recinto->recinto = $request['recinto'];
        $recinto->save();
        return redirect('recintos/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recinto  $recinto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recinto $recinto)
    {
        $recinto->delete();
        return redirect('recintos/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('recintos/lista', ['rs' => $rs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Lengua;
use Illuminate\Http\Request;

class LenguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Lengua::all();
        return $rs;
    }


    public function create()
    {
        return view('lenguas.crearlengua');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lengua= new Lengua();
        $lengua->lengua = $request['lengua'];
        $lengua->save();
        return redirect('lenguas/lista');
    }


    public function show(Lengua $lengua)
    {
       return $lengua;
    }


    public function edit(Lengua $lengua)
    {
      return view('lenguas.editarlengua',['lengua'=>$lengua]);
    }


    public function update(Request $request, Lengua $lengua)
    {
       $lengua->lengua=$request['lengua'];
       $lengua->save();
       return redirect('lenguas/lista');
    }


    public function destroy(Lengua $lengua)
    {
       $lengua->delete();
       return redirect('lenguas/lista');
    }

    public function list()
    {
        $rs =$this->index();
        return view('lenguas.listalengua',['rs'=>$rs]);
    }
}

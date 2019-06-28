<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use App\Sexo;
use App\Recinto;
use App\Carrera;
use App\Area;
use App\Modalidad;
use App\Etnia;
use App\Nacionalidad;
use App\Domicilio;
use App\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Perfil::with([
            'sexo',
            'recinto',
            'carrera',
            'area',
            'modalidad',
            'etnia',
            'nacionalidad',
            'user',
            'domicilio'
        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $sexos = Sexo::all();
        $recintos = Recinto::all();
        $carreras = Carrera::all();
        $areas = Area::all();
        $modalidades = Modalidad::all();
        $etnias = Etnia::all();
        $nacionalidades = Nacionalidad::all();
        $domicilio = Domicilio::all();
        return view('perfiles.crearperfiles', compact('sexos', 'recintos', 'carreras', 'areas', 'modalidades', 'domicilio','etnias', 'nacionalidades'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->recinto_id = $request['recinto_id'];
        $perfil->carrera_id = $request['carrera_id'];
        $perfil->area_id = $request['area_id'];
        $perfil->modalidad_id = $request['modalidad_id'];
        $perfil->etnia_id = $request['etnia_id'];
        $perfil->nacionalidad_id = $request['nacionalidad_id'];
        $perfil->domicilio_id = $request['domicilio_id'];
        $perfil->user_id = auth()->id();
        $perfil->save();
        return redirect('perfiles/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return $perfil;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        $sexos = Sexo::all();
        $recintos = Recinto::all();
        $carreras = Carrera::all();
        $areas = Area::all();
        $modalidades = Modalidad::all();
        $etnias = Etnia::all();
        $nacionalidades = Nacionalidad::all();
        $domicilio = Domicilio::all();
        return view('perfiles/editarperfiles', ['perfil' => $perfil], compact('sexos', 'recintos', 'carreras', 'areas', 'modalidades', 'etnias', 'nacionalidades', 'domicilio'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->recinto_id = $request['recinto_id'];
        $perfil->carrera_id = $request['carrera_id'];
        $perfil->area_id = $request['area_id'];
        $perfil->modalidad_id = $request['modalidad_id'];
        $perfil->etnia_id = $request['etnia_id'];
        $perfil->nacionalidad_id = $request['nacionalidad_id'];
        $perfil->domicilio_id = $request['domicilio_id'];
        $perfil->user_id = $request['user_id'];
        $perfil->save();
        return redirect('perfiles/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/list');
    }
    public function list()
    {
        $rs = $this->index();
        return view('perfiles/listaperfiles',['rs' => $rs]);
    }
}

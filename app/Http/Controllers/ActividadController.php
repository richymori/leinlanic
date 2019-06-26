<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;
use App\Leccion;

class ActividadController extends Controller
{
    public function index()
    {
        return Actividad::with([
            'leccion',
        ])->get();
    }

    public function create()
    {
        $lecciones = Leccion::all();
        return view('actividades.crearactividades', compact('lecciones'));
    }

    public function store(Request $request)
    {
        $actividad = new Actividad();
        $actividad->actividad = $request['leccion'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->leccion_id = $request['leccion_id'];
        $actividad->save();

        return $actividad;
    }

    public function show(Actividad $actividad)
    {
        return $actividad;
    }

    public function edit(Actividad $actividad)
    {
        $lecciones = Leccion::all();
        return view('actividades.editaractividades', ['actividad' => $actividad], compact('lecciones'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $actividad->actividad = $request['leccion'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->leccion_id = $request['leccion_id'];
        $actividad->save();

        return redirect('actividades');
    }

    public function list()
    {
        $ac = $this->index();
        return view('actividades.listaactividades', ['ac' => $ac]);
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect('actividades');
    }
}

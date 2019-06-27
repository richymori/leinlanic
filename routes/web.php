<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('sexos/edit/{sexo}', 'SexoController@edit');
Route::get('sexos/list', 'SexoController@list');
Route::get('sexos/create', 'SexoController@create');
Route::delete('sexos/{sexo}', 'SexoController@destroy');
Route::get('sexos', 'SexoController@index');
Route::get('sexos/{sexo}', 'SexoController@show');
Route::post('sexos', 'SexoController@store');
Route::patch('sexos/list{sexo}', 'SexoController@update');


Route::get('recintos/edit/{recinto}', 'RecintoController@edit');
Route::get('recintos/list', 'RecintoController@list');
Route::get('recintos/create', 'RecintoController@create');
Route::get('recintos', 'RecintoController@index');
Route::get('recintos/{recinto}', 'RecintoController@show');
Route::post('recintos', 'RecintoController@store');
Route::patch('recintos/{recinto}', 'RecintoController@update');
Route::delete('recintos/{recinto}', 'RecintoController@destroy');


Route::get('modalidades/edit/{modalidad}', 'ModalidadController@edit');
Route::get('modalidades/list', 'ModalidadController@list');
Route::get('modalidades/create', 'ModalidadController@create');
Route::get('modalidades', 'ModalidadController@index');
Route::get('modalidades/{modalidad}', 'ModalidadController@show');
Route::post('modalidades', 'ModalidadController@store');
Route::patch('modalidades/{modalidad}', 'ModalidadController@update');
Route::delete('modalidades/{modalidad}', 'ModalidadController@destroy');


Route::get('nacionalidades/edit/{nacionalidad}', 'NacionalidadController@edit');
Route::get('nacionalidades/list', 'NacionalidadController@list');
Route::get('nacionalidades/create', 'NacionalidadController@create');
Route::get('nacionalidades', 'NacionalidadController@index');
Route::get('nacionalidades/{nacionalidad}', 'NacionalidadController@show');
Route::post('nacionalidades', 'NacionalidadController@store');
Route::patch('nacionalidades/{nacionalidad}', 'NacionalidadController@update');
Route::delete('nacionalidades/{nacionalidad}', 'NacionalidadController@destroy');


Route::get('carreras/edit/{carrera}', 'CarreraController@edit');
Route::get('carreras/list', 'CarreraController@list');
Route::get('carreras/create', 'CarreraController@create');
Route::get('carreras', 'CarreraController@index');
Route::get('carreras/{carrera}', 'CarreraController@show');
Route::post('carreras', 'CarreraController@store');
Route::patch('carreras/{carrera}', 'CarreraController@update');
Route::delete('carreras/{carrera}', 'CarreraController@destroy');

Route::get('areas/edit/{area}', 'AreaController@edit');
Route::get('areas/list', 'AreaController@list');
Route::get('areas/create', 'AreaController@create');
Route::get('areas', 'AreaController@index');
Route::get('areas/{area}', 'AreaController@show');
Route::post('areas', 'AreaController@store');
Route::patch('areas/{area}', 'AreaController@update');
Route::delete('areas/{area}', 'AreaController@destroy');

Route::get('domicilios/edit/{domicilio}', 'DomicilioController@edit');
Route::get('domicilios/list', 'DomicilioController@list');
Route::get('domicilios/create', 'DomicilioController@create');
Route::get('domicilios', 'DomicilioController@index');
Route::get('domicilios/{domicilio}', 'DomicilioController@show');
Route::post('domicilios', 'DomicilioController@store');
Route::patch('domicilios/{domicilio}', 'DomicilioController@update');
Route::delete('domicilios/{domicilio}', 'DomicilioController@destroy');


Route::get('etnias/edit/{etnia}', 'EtniaController@edit');
Route::get('etnias/list', 'EtniaController@list');
Route::get('etnias/create', 'EtniaController@create');
Route::get('etnias', 'EtniaController@index');
Route::get('etnias/{etnia}', 'EtniaController@show');
Route::post('etnias', 'EtniaController@store');
Route::patch('etnias/{etnia}', 'EtniaController@update');
Route::delete('etnias/{etnia}', 'EtniaController@destroy');


Route::get('cursos','CursoController@index');
Route::get('cursos/crear','CursoController@create');
Route::post('cursos','CursoController@store');
// NIVELES.

Route::get('niveles/editar/{nivel}','NivelController@edit');
Route::get('niveles/lista','NivelController@list');
Route::get('niveles','NivelController@index');
Route::get('niveles/crear','NivelController@create');
Route::get('niveles/{nivel}','NivelController@show');
Route::post('niveles','NivelController@store');
Route::patch('niveles/{nivel}','NivelController@update');
Route::delete('niveles/{nivel}','NivelController@destroy');

// lECCIONES.

Route::get('lecciones/editar/{leccion}','LeccionController@edit');
Route::get('lecciones/lista','LeccionController@list');
Route::get('lecciones','LeccionController@index');
Route::get('lecciones/crear','LeccionController@create');
Route::get('lecciones/{leccion}','LeccionController@show');
Route::post('lecciones','LeccionController@store');
Route::patch('lecciones/{leccion}','LeccionController@update');
Route::delete('lecciones/{leccion}','LeccionController@destroy');

// ACTIVIDADES.

Route::get('actividades/editar/{actividad}','ActividadController@edit');
Route::get('actividades/lista','ActividadController@list');
Route::get('actividades','ActividadController@index');
Route::get('actividades/crear','ActividadController@create');
Route::get('actividades/{actividad}','ActividadController@show');
Route::post('actividades','ActividadController@store');
Route::patch('actividades/{actividad}','ActividadController@update');
Route::delete('actividades/{actividad}','ActividadController@destroy');





    //   P R E G U N T A S
    Route::get('preguntas/editar/{pregunta}', 'PreguntaController@edit');
    Route::get('preguntas/lista', 'PreguntaController@list');
    Route::get('preguntas/crear', 'PreguntaController@create');

    Route::get('preguntas', 'PreguntaController@index');
    Route::get('preguntas/{pregunta}', 'PreguntaController@show');
    Route::post('preguntas', 'PreguntaController@store');
    Route::patch('preguntas/{pregunta}', 'PreguntaController@update');
    Route::delete('preguntas/{pregunta}', 'PreguntaController@destroy');


    // R E S P U E S T A S
    Route::get('respuestas/editar/{respuesta}', 'RespuestaController@edit');
    Route::get('respuestas/lista', 'RespuestaController@list');
    Route::get('respuestas/crear', 'RespuestaController@create');

    Route::get('respuestas', 'RespuestaController@index');
    Route::get('respuestas/{respuesta}', 'RespuestaController@show');
    Route::post('respuestas', 'RespuestaController@store');
    Route::patch('respuestas/{respuesta}', 'RespuestaController@update');
    Route::delete('respuestas/{respuesta}', 'RespuestaController@destroy');

    //T I P O   P R E G U N T A S
    Route::get('tipopreguntas/editar/{tipoPregunta}', 'TipoPreguntaController@edit');
    Route::get('tipopreguntas/lista', 'TipoPreguntaController@list');
    Route::get('tipopreguntas/crear', 'TipoPreguntaController@create');

    Route::get('tipopreguntas', 'TipoPreguntaController@index');
    Route::get('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@show');
    Route::post('tipopreguntas', 'TipoPreguntaController@store');
    Route::patch('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@update');
    Route::delete('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@destroy');



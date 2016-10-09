<?php
use Ceidin\Models\Persona;
use Ceidin\Models\Empleado;
use Ceidin\Models\Usuario;
use Ceidin\Models\Estatus;
use Ceidin\Models\Acta;
use Ceidin\Models\Rol;
use Ceidin\Models\Cargo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function () {
  $empleado = Empleado::find(14);
  echo "<br>nombre: ".$empleado->persona->nombre_1;
  echo "<br>cargo: ".$empleado->cargo->nombre;
  echo "<br>usuario: ".$empleado->persona->usuario->usuario;
  echo "<br>correo: ".$empleado->persona->usuario->correo;

  echo "<br>correo: 2 ".$empleado->usuarios[0]->correo;
  return;
});

Route::resource('empleado','EmpleadoController');

Route::resource('inscripcion','InscripcionController');

Route::get('/admin', 'FrontController@admin');
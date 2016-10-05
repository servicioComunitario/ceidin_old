<?php
use Ceidin\Models\Persona;
use Ceidin\Models\Empleado;
use Ceidin\Models\Usuario;
use Ceidin\Models\Estatus;
use Ceidin\Models\Acta;
use Ceidin\Models\Rol;

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
  return Empleado::find(2)->actasPorDirectivo;
});

Route::resource('empleado','EmpleadoController');
<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model{
  protected $table = 'persona';

  public $timestamps = true;

  protected $fillable = [
    'nombre_1', 'nombre_2', 'apellido_1', 'apellido_2', 'cedula', 'direccion', 'telefono', 'fecha_nacimiento'
  ];
}

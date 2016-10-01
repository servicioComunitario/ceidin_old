<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    protected $table = 'procedencia';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function alumnos(){
    	return $this->hasMany('Ceidin\Models\Alumno', 'id_estatus');
    }
}

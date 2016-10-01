<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function empleados(){
    	return $this->hasMany('Ceidin\Models\Empleado', 'id_cargo', 'id_persona');
    }
}

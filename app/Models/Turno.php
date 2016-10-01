<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turno';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function inscripciones(){
    	return $this->hasMany('Ceidin\Models\Inscripcion', 'id_turno');
    }
}

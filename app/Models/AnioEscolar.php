<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class AnioEscolar extends Model
{
    protected $table = 'anioEscolar';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    public function diasLaborales(){
    	return $this->hasMany('Ceidin\Models\DiaLaboral', 'id_anio_escolar');
    }

     public function secciones(){
    	return $this->hasMany('Ceidin\Models\Seccion', 'id_anio_escolar');
    }
}

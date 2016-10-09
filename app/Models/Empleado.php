<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $primaryKey = 'id_persona';

    //public $timestamps = true;

    public function actasPorSae(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_sae');
    }

    public function actasPorDirectivo(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_directivo');
    }

    public function actasPorDocente(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_docente');
    }

     public function cargo(){
        //return $this->belongsTo('Ceidin\Models\Cargo', 'id_cargo', 'id_persona');
        return $this->belongsTo('Ceidin\Models\Cargo', 'id_cargo', 'id');
    }

    public function diasLaborebles(){
        return $this->belongsToMany('Ceidin\Models\DiaLaborable', 'asistencia' ,'id_empleado', 'id_dia_laborable');
    }

    public function persona(){
        return $this->belongsTo('Ceidin\Models\Persona', 'id_persona', 'id');
    }

    public function retiros(){
        return $this->hasMany('Ceidin\Models\Retiro', 'atentido_por');
    }

    public function secciones(){
        return $this->hasMany('Ceidin\Models\Seccion', 'id_docente');
    }

    public function usuarios(){
        return $this->hasManyThrough('Ceidin\Models\Usuario', 'Ceidin\Models\Persona', 'id', 'id_persona');
    }

}

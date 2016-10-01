<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class DiaLaborable extends Model
{
    protected $table = 'dia_laborable';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    public function anioEscolar(){
        return $this->belongsTo('Ceidin\Models\AnioEscolar', 'id_anio_escolar', 'id');
    }

    public function empleados(){
        return $this->belongsToMany('Ceidin\Models\Empleado', 'asistencia' ,'id_dia_laborable', 'id_empleado');
    }
}

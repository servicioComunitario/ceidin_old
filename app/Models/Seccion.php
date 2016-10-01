<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'seccion';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    public function anioEscolar(){
        return $this->belongsTo('Ceidin\Models\AnioEscolar', 'id_anio_escolar', 'id');
    }

    public function docente(){
        return $this->belongsTo('Ceidin\Models\Empleado', 'id_docente', 'id_persona');
    }

    public function inscripciones(){
        return $this->hasMany('Ceidin\Models\Inscripcion', 'id_seccion');
    }
}

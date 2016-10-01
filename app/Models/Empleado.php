<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $primaryKey = 'id_persona';

    public function actasPorSae(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_sae');
    }

    public function actasPorDirectivo(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_directivo');
    }

    public function actasPorDocente(){
        return $this->hasMany('Ceidin\Models\Acta', 'id_docente');
    }
}

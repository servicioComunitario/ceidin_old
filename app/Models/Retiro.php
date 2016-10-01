<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Retiro extends Model
{
    protected $table = 'retiro';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'motivo',
        'fecha'
    ];

   	public function atentidoPor(){
        return $this->belongsTo('Ceidin\Models\Empleado', 'atentido_por', 'id_persona');
    }

    public function inscripcion(){
        return $this->belongsTo('Ceidin\Models\Inscripcion', 'id_inscripcion');
    }

    public function retiradoPor(){
        return $this->belongsTo('Ceidin\Models\Persona', 'retirado_por');
    }
}

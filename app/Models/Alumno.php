<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

  	protected $primaryKey = 'id_persona';

  	//public $timestamps = true;

  	protected $fillable = [
		'lugar_nacimiento'
  	];

  	public function procedencia(){
        return $this->belongsTo('Ceidin\Models\Procedencia', 'id_procedencia');
    }

    public function antecedenteSalud(){
        return $this->belongsTo('Ceidin\Models\AntecedenteSalud', 'id_antecedente_salud');
    }

    public function antecedenteFamiliar(){
        return $this->belongsTo('Ceidin\Models\AntecedenteFamiliar', 'id_antecedente_familiar');
    }

    public function inscripciones(){
    	return $this->hasMany('Ceidin\Models\Inscripciones', 'id_alumno');
    }

    public function juegos(){
        return $this->belongsToMany('Ceidin\Models\Juego', 'alumno_juego','id_alumno','id_juego');
    }

    public function persona(){
        return $this->belongsTo('Ceidin\Models\Persona', 'id_persona', 'id');
    }

}

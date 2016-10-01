<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'representante';

    protected $primaryKey = 'id_persona';

    //public $timestamps = true;

    protected $fillable = [
      'telefono_casa'
    ];

    public function inscripciones(){
    	return $this->hasMany('Ceidin\Models\Inscripcion', 'id_representante');
    }

    public function persona(){
        return $this->belongsTo('Ceidin\Models\Persona', 'id_persona', 'id');
    }

    public function parentesco(){
        return $this->belongsTo('Ceidin\Models\Parentesco', 'id_parentesco');
    }
}

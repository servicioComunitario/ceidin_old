<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table = 'familiar';

    protected $primaryKey = 'id_persona';

    //public $timestamps = true;

    protected $fillable = [
        'grado_instruccion', 
        'ocupacion'
    ];

    public function persona(){
        return $this->belongsTo('Ceidin\Models\Persona', 'id_persona', 'id');
    }

    public function antecedentesFamiliares(){
        return $this->belongsToMany('Ceidin\Models\AntecedenteFamiliar', 'antecedente_familiar_familiar','id_persona','id_antecedente_familiar');
    }

    public function nacionalidad(){
        return $this->belongsTo('Ceidin\Models\Nacionalidad', 'id_nacionalidad');
    }

    public function parentesco(){
        return $this->belongsTo('Ceidin\Models\Parentesco', 'id_parentesco');
    }
}

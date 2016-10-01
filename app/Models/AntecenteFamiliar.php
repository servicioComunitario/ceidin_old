<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class AntecenteFamiliar extends Model
{
    protected $table = 'antecende_familiar';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      	'nro_hermanos',
      	'lugar_grupo_familiar',
      	'cuidado_en_casa_por'
    ];

    public function situacion_pareja(){
    	return $this->belongsTo('Ceidin\Models\SituacionPareja', 'id_situacion_pareja');
    }

    public function religion(){
    	return $this->belongsTo('Ceidin\Models\Religion', 'id_situacion_pareja');
    }

    public function vivienda(){
    	return $this->belongsTo('Ceidin\Models\Vivienda', 'id_situacion_pareja');
    }

    public function familiares(){
        return $this->belongsToMany('Ceidin\Models\Familiar', 'antecedente_familiar_familiar' ,'id_antecedente_familiar', 'id_persona');
    }

    public function alumno(){
        return $this->hasOne('Ceidin\Models\Alumno', 'id_persona');
    }
}

<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class OtrosDatos extends Model
{
    protected $table = 'otros_datos';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    ];

    public function inscripcion(){
		return $this->hasOne('Ceidin\Models\Inscripcion', 'id_otros_datos');
  	}

  	public function medidaEntrada(){
        return $this->belongsTo('Ceidin\Models\Medida', 'id_medida_al_entrar');
    }

    public function medidaSalida(){
        return $this->belongsTo('Ceidin\Models\Medida', 'id_medida_al_salir');
    }
}

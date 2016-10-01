<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = 'medida';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'talla',
      'orden'
    ];

    public function otrosDatosEntrada(){
		return $this->hasOne('Ceidin\Models\OtrosDatos', 'id_medida_al_entrar');
  	}

  	public function otrosDatosSalida(){
		return $this->hasOne('Ceidin\Models\OtrosDatos', 'id_medida_al_salir');
  	}
}

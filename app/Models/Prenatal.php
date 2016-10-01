<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Prenatal extends Model
{
	protected $table = 'prenatal';

  	protected $primaryKey = 'id';

  	//public $timestamps = true;

  	protected $fillable = [
  	];

  	public function antecedenteSalud(){
		return $this->hasOne('Ceidin\Models\AntecedenteSalud', 'id_prenatal', 'id');
  	}

  	public function tipoEmbarazo(){
  	    return $this->belongsTo('Ceidin\Models\TipoEmbarazo', 'id_tipo_embarazo');
  	}

  	public function tipoParto(){
  	    return $this->belongsTo('Ceidin\Models\TipoParto', 'id_tipo_parto');
  	}
}

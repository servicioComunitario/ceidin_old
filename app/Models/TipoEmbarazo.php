<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEmbarazo extends Model
{
    protected $table = 'tipo_embarazo';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function prenatales(){
    	return $this->hasMany('Ceidin\Models\Prenatal', 'id_tipo_embarazo');
    }
}

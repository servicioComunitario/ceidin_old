<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $table = 'vivienda';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function antecendentesFamiliares(){
    	return $this->hasMany('Ceidin\Models\AntecedenteFamiliar', 'id_situacion_paerja');
    }
}

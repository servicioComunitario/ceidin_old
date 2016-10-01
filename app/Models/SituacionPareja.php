<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class SituacionPareja extends Model
{
    protected $table = 'situacion_paerja';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function antecedentesFamiliares(){
      	return $this->hasMany('Ceidin\Models\AntecedenteFamiliar', 'id_situacion_paerja');
    }
}

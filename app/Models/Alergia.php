<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    protected $table = 'alergia';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    
    public function antecedentesSalud(){
      	return $this->belongsToMany('Ceidin\Models\AntecedenteSalud', 'antecedente_salud_alergia' , 'id_alergia', 'id_antecedente_salud');
    }
}

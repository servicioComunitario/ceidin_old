<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    protected $table = 'vacuna';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function antecedentesSalud(){
      	return $this->belongsToMany('Ceidin\Models\AntecedenteSalud', 'antecedente_salud_vacuna' , 'id_vacuna', 'id_antecedente_salud');
    }
}

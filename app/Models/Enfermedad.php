<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedad';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function antecedentesSalud(){
      	return $this->belongsToMany('Ceidin\Models\AntecedenteSalud', 'antecedente_salud_enfermedad' , 'id_enfermedad', 'id_antecedente_salud');
    }
}

<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class MedicamentoFiebre extends Model
{
    protected $table = 'medicamento_fiebre';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function antecedentesSalud(){
      	return $this->belongsToMany('Ceidin\Models\AntecedenteSalud', 'antecedente_salud_medicamento' , 'id_medicamento', 'id_antecedente_salud');
    }
}

<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class AntecenteSalud extends Model
{
    protected $table = 'antecedente_salud';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'problema_durante_parto',
      	'desarrollo_primer_anio',
      	'desarrollo_posterior',
      	'problema_de_lenguaje',
      	'edad_control_esfinteres'
    ];

    public function alergias(){
      	return $this->belongsToMany('Ceidin\Models\Alergia', 'antecedente_salud_alergia' ,'id_antecedente_salud', 'id_alergia');
    }

    public function enfermedades(){
        return $this->belongsToMany('Ceidin\Models\Enfermedad', 'antecedente_salud_enfermedad' ,'id_antecedente_salud', 'id_enfermedades');
    }

    public function vacunas(){
        return $this->belongsToMany('Ceidin\Models\Vacuna', 'antecedente_salud_vacuna' ,'id_antecedente_salud', 'id_vacuna');
    }

    public function prenatal(){
        return $this->belongsTo('Ceidin\Models\Prenatal', 'id_prenatal');
    }

    public function alumno(){
        return $this->hasOne('Ceidin\Models\Alumno', 'id_persona');
    }

    public function medicamentoFiebre(){
        return $this->belongsToMany('Ceidin\Models\MedicamentoFiebre', 'antecedente_salud_medicamento' ,'id_antecedente_salud', 'id_medicamento');
    }
}

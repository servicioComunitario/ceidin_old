<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripcion';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'fecha'
    ];

    public function alumno(){
        return $this->belongsTo('Ceidin\Models\Alumno', 'id_alumno');
    }

    public function documentosIdentificacion(){
        return $this->belongsToMany('Ceidin\Models\DocumentoIdentificacion', 'inscripcion_documento_identificacion' ,'id_inscripcion', 'id_documento_identificacion');
    }

    public function representante(){
        return $this->belongsTo('Ceidin\Models\Representante', 'id_represantante');
    }

    public function otrosDatos(){
        return $this->belongsTo('Ceidin\Models\OtrosDatos', 'id_otros_datos');
    }

    public function turno(){
        return $this->belongsTo('Ceidin\Models\Turno', 'id_turno');
    }

    public function seccion(){
        return $this->belongsTo('Ceidin\Models\Seccion', 'id_seccion');
    }


    public function retiro(){
        return $this->hasOne('Ceidin\Models\Retiro', 'id_inscripcion', 'id');
    }

}

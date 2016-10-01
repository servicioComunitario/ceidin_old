<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentoIdentificacion extends Model
{
    protected $table = 'documento_identificacion';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    public function inscripciones(){
        return $this->belongsToMany('Ceidin\Models\Inscripcion', 'inscripcion_documento_identificacion' ,'id_documento_identificacion', 'id_inscripcion');
    }
}

<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    protected $table = 'acta';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'numero_acta'
    ];

    public function productos(){
      	return $this->belongsToMany('Ceidin\Models\Producto', 'acta_producto','id_acta','id_producto');
    }

    public function sae(){
        return $this->belongsTo('Ceidin\Models\Empleado', 'id_sae', 'id_persona');
    }

    public function directivo(){
        return $this->belongsTo('Ceidin\Models\Empleado', 'id_directivo', 'id_persona');
    }

    public function docente(){
        return $this->belongsTo('Ceidin\Models\Empleado', 'id_docente', 'id_persona');
    }
}

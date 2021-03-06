<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
    	'nombre'
    ];

    public function actas(){
      	return $this->belongsToMany('Ceidin\Models\Acta', 'acta_producto','id_producto','id_acta');
    }

    public function unidad(){
        return $this->belongsTo('Ceidin\Models\Unidad', 'id_unidad');
    }
}

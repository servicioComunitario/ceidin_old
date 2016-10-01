<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidad';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function productos(){
    	return $this->hasMany('Ceidin\Models\Producto', 'id_unidad');
    }
}

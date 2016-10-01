<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    protected $table = 'estatus';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function usuarios(){
    	return $this->hasMany('Ceidin\Models\Usuario', 'id_estatus');
    }
}

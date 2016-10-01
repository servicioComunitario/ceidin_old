<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = 'parentesco';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function familiares(){
    	return $this->hasMany('Ceidin\Models\Familiar', 'id_parentesco', 'id_persona');
    }

    public function representantes(){
    	return $this->hasMany('Ceidin\Models\Representante', 'id_parentesco', 'id_persona');
    }
}

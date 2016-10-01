<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table = 'nacionalidad';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
      'nombre'
    ];

    public function familiares(){
    	return $this->hasMany('Ceidin\Models\Familiar', 'id_nacionalidad', 'id_persona');
    }
}

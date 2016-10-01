<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $table = 'juego';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre'
    ];

    public function alumnos(){
        return $this->belongsToMany('Ceidin\Models\Alumno', 'juegos_alumno' ,'id_juego', 'id_alumno');
    }
}

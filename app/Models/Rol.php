<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'id';

    //public $timestamps = true;

    protected $fillable = [
        'nombre', 
        'descripcion'
    ];

    public function usuarios(){
    	// primer parametro: nombre del modelo al que hacemos referencia
    	// segundo parametro: nombre de la clave ajena
    	// tercer parametro: columna local que debe ser utilizada para la relacion
        return $this->belongsToMany('Ceidin\Models\Usuario', 'rol_usuario','id_rol','id_usuario');
    }
}

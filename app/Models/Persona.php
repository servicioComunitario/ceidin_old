<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;
use Ceidin\Models\Usuario;

class Persona extends Model
{
	protected $table = 'persona';

  	protected $primaryKey = 'id';

  	//public $timestamps = true;

  	protected $fillable = [
		'nombre_1', 
		'nombre_2', 
		'apellido_1', 
		'apellido_2', 
		'cedula', 
		'direccion', 
		'telefono', 
		'fecha_nacimiento'
  	];

  	public function usuario(){
		// primer parametro: nombre del modelo al que hacemos referencia
		// segundo parametro: nombre de la clave ajena
		// tercer parametro: columna local que debe ser utilizada para la relacion
		return $this->hasOne('Ceidin\Models\Usuario', 'id_persona', 'id');
  	}

  	public function familiar(){
		return $this->hasOne('Ceidin\Models\Familiar', 'id_persona', 'id');
  	}

  	public function alumno(){
		return $this->hasOne('Ceidin\Models\Alumno', 'id_persona', 'id');
  	}

  	public function empleado(){
		return $this->hasOne('Ceidin\Models\Empleado', 'id_persona', 'id');
  	}

  	public function representante(){
		return $this->hasOne('Ceidin\Models\Representate', 'id_persona', 'id');
  	}

  	public function retiros(){
    	return $this->hasMany('Ceidin\Models\Retiro', 'retirado_por');
    }

}

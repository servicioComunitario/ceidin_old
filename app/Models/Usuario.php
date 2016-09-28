<?php

namespace Ceidin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ceidin\Models\Persona;

class Usuario extends Authenticatable{
  use Notifiable;

  protected $table = 'usuario';

  protected $primaryKey = 'id_persona';

  public $timestamps = true;

  protected $fillable = [
    'usuario', 'password', 'correo',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public function persona(){
    // primer parametro: nombre del modelo al que hacemos referencia
    // segundo parametro: columna local que indica cual es la clave ajena(foreign key)
    // segundo parametro: nombre de la columna asociada en la tabla padre
    return $this->belongsTo('Ceidin\Models\Persona', 'id_persona', 'id');
  }
}

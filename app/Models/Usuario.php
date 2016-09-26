<?php

namespace Ceidin\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable{
  use Notifiable;


  protected $fillable = [
    'usuario', 'password', 'correo',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
}

<?php

namespace Ceidin\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable{
  use Notifiable;

  protected $table = 'usuario';

  protected $primarykey = 'id';

  public $timestamps = true;


  protected $fillable = [
    'usuario', 'password', 'correo',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
}

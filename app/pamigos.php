<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pamigos extends Model
{

	protected $table = 'pamigos';

    protected $fillable = ['usu_cod', 'pais_amigo', 'nombre_amigo', 'email_amigo', 'tel_amigo'];
}

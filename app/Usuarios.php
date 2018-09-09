<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuario';

    protected $fillable = ['usu_cod', 'usu_mobile', 'usu_name'];
}

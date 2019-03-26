<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable =
    [
        'nombre',
        'apellido_mat',
        'apellido_pat',
        'curp',
        'fecha_nac'
    ];
}

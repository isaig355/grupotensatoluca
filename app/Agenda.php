<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['correo_cita','telefono_cita','fecha_hora_cita','comentarios_cita'];
}

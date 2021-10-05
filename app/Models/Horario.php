<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable=[
      "id",
      "id_empleado",
      "materia",
      "actividades",
      "t_horas",
      "lunes",
      "martes",
      "miercoles",
      "jueves",
      "viernes",
      "sabado"
    ];
}

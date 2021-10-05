<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "periodo",
        "actividades",
        "departamento",
        "folio",
        "t_horas"
      ];
}

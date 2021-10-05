<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nombre",
        "appat",
       "apmat",
        "fechanac",
        "curp",
        "rfc",
        "ine",
        "correo",
        "telefono",
        "tipoemple"

    ];
}

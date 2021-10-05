<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bancario extends Model
{
    use HasFactory;

    
    protected $fillable=[
        "id",
        "nombre_banco",
        "clave_bancaria",
        "nocuenta",
        "sucursal"
        

    ];
}

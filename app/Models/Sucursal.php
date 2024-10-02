<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursales'; // Asegúrate de que sea el nombre correcto de la tabla
    protected $fillable = ['nombre', 'direccion']; // Campos que se pueden llenar
}
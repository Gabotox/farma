<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    use HasFactory;

    protected $table = 'distribuidores'; // Asegúrate de que sea el nombre correcto de la tabla
    protected $fillable = ['nombre']; // Campos que se pueden llenar
}
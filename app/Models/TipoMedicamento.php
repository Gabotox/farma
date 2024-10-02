<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMedicamento extends Model
{
    use HasFactory;

    protected $table = 'tipos_medicamentos'; // Asegúrate de que sea el nombre correcto de la tabla
    protected $fillable = ['nombre']; // Campos que se pueden llenar
}

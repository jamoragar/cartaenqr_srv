<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = ['idioma', 'nombre_categoria', 'tipo_categoria', 'ruta_archivo', 'opcion', 'valor'];
}

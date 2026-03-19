<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;
    protected $fillable = [
        'titulo',
        'autor',
        'anio',
        'genero',
        'resumen',
        'imagen'
    ];

    public static function fieldLabels(){

        return[
            'titulo'=>'Título',
            'autor'=>"Autor",
            'anio'=>"Año",
            'genero'=>"Género",
            'resumen'=>"Resumen",
            'imagen' => "Imagen",
            'created_at'=>"Fecha de Creación",
            "updated_at"=>"Fecha de modificación"
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titulo',
        'autor',
        'anio',
        'genero',
        'resumen',
        'imagen'
    ];

    public static function fieldLabels(){

        return[
            'user_id' => 'ID de usuario',
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

    public function user(){
        return $this->belongsTo(User::class);

    }
}

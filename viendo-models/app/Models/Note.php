<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory, SoftDeletes;

    //Sirve para decirle al objeto que van a hacer parametros cumplimentados
    protected $fillable = 
    [
        "titulo",
        "descripcion",
        "fecha_entrega",
        "hecho"
    ];

    protected $casts = [
        "fecha_entrega"=>"date"
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
        'ci' => 'required',
    ];

    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'fecha_nac',
        'telefono',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pre_student extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'nombre',
        'sexo',
        'pregrado',


    ];
}
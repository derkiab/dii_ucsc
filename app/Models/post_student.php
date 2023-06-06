<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_student extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'nombre',
        'sexo',
        'postgrado',


    ];
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'authors', 'rut', 'doi');
    }
}

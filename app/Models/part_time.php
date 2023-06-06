<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part_time extends Model
{
    use HasFactory;



    protected $fillable = [
        'rut',
        'nombre',
        'sexo',
        'dependencia',


    ];
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'authors', 'rut', 'doi');
    }
}

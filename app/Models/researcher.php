<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class researcher extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'nombre',
        'sexo',
        'vigente',
        'dependencia',
        'in_ex',
        'interno_externo',
        'centro',


    ];
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'authors', 'rut', 'doi');
    }
}

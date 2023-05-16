<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'sede',
        'dependencia',
        'tipo_estudio',
        'estado',

    ];

    public function dependencies()
    {
        return $this->belongsTo(dependency::class, 'dependencia');
    }

}

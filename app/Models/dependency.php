<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependency extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificador',
        'nombre',

    ];

    public function careers()
    {
        return $this->hasMany(career::class);
    }
}

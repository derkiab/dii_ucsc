<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'doi',
        'titulo',
        'año',
        'issn',
        'eissn',
        'journal',
        'observacion',


    ];

    public function academics()
    {
        return $this->belongsToMany(Academic::class, 'authors', 'doi', 'rut');
    }
    public function administratives()
    {
        return $this->belongsToMany(Administrative::class, 'authors', 'doi', 'rut');
    }
    public function part_times()
    {
        return $this->belongsToMany(part_time::class, 'authors', 'doi', 'rut');
    }
    public function post_students()
    {
        return $this->belongsToMany(post_student::class, 'authors', 'doi', 'rut');
    }
    public function pre_students()
    {
        return $this->belongsToMany(pre_student::class, 'authors', 'doi', 'rut');
    }
    public function researchers()
    {
        return $this->belongsToMany(researcher::class, 'authors', 'doi', 'rut');
    }
}

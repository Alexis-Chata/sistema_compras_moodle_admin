<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    public function gruposlastlimit()
    {
        return $this->hasMany(Grupo::class)->latest()->take(8);
    }
}

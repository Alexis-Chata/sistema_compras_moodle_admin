<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

    public function gcuotas()
    {
        return $this->hasMany(Gcuota::class);
    }
}

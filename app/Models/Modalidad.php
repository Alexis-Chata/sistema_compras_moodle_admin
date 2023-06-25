<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;

    public function cuotas()
    {
        return $this->hasMany(Cuota::class);
    }

    public function cmatriculas()
    {
        return $this->hasMany(Cmatricula::class);
    }
}

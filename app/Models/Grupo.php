<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use HasFactory;
    use SoftDeletes;

    #estudiantes - cursos
    public function gmatriculas()
    {
        return $this->hasMany(Gmatricula::class);
    }

    public function gcuotas()
    {
        return $this->hasMany(Gcuota::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}

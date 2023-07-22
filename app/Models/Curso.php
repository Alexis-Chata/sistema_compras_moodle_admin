<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function modalidads()
    {
        return $this->hasMany(Modalidad::class);
    }

    public function cuotas()
    {
        return $this->hasManyThrough(Cuota::class, Modalidad::class);
    }

    public function gruposlastlimit()
    {
        return $this->hasMany(Grupo::class)->latest()->take(8);
    }

    public function getObtenerMatriculasAttribute()
    {
        $curso = Curso::find($this->id);
        $total = 0;
        foreach ($curso->modalidads as $mod) {
            $total = $total + $mod->cmatriculas->count();
        }
        return $total;
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected $appends = [
        'modalidad_name'
    ];

    protected function modalidadName(): Attribute
    {
        return new Attribute(
            get: fn () => 'yes',
        );
    }

    protected function imagen(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => file_exists(public_path($value)) ? $value : '/silicon-front/assets/images/courses/4by3/05.jpg',
        );
    }
}

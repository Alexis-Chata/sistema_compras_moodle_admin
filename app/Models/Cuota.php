<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    public function gcuotas()
    {
        return $this->hasMany(Gcuota::class);
    }


    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

}

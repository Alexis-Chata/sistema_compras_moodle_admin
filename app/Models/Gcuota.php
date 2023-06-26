<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcuota extends Model
{
    use HasFactory;

    public function cuota()
    {
        return $this->belongsTo(Cuota::class);
    }
}

<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model implements Buyable
{
    use HasFactory;

    public function cuotas()
    {
        return $this->hasMany(Cuota::class);
    }

    public function gcuotas()
    {
        return $this->hasManyThrough(Gcuota::class, Cuota::class);
    }

    public function cmatriculas()
    {
        return $this->hasMany(Cmatricula::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->cuotas->first()->monto;
    }
    public function getBuyableWeight($options = null) {
        return 1;
    }
}

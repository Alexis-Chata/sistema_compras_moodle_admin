<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model implements Buyable
{
    use HasFactory;

    protected $guarded = [];

    public function gcuotas()
    {
        return $this->hasMany(Gcuota::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

    /**
     * Interact with the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function monto(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format($value, 2),
            set: fn ($value) => number_format($value, 2),
        );
    }

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->monto;
    }
    public function getBuyableWeight($options = null) {
        return 1;
    }
}

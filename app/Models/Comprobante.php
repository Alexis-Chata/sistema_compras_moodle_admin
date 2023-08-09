<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprobante extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function cliente(){
        return $this->belongsTo(User::class,'cliente_id');
    }

    public function cajero(){
        return $this->belongsTo(User::class,'cajero_id');
    }

    public function detalles()
    {
        return $this->hasMany(Detalle::class);
    }
}

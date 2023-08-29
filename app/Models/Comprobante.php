<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Comprobante extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        'femision' => 'datetime:d-m-Y',
    ];

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

    public function subir_imagen($nombre,$imagen){
        $ideposito = $imagen->storeAs('public/comprobantes/depositos', $nombre);
        $this->imagen_deposito = Storage::url($ideposito);
        $this->save();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cmatricula extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class);
    }

    public function mpagos()
    {
        return $this->hasMany(Mpago::class);
    }
}

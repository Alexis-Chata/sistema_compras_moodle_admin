<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmatricula extends Model
{
    use HasFactory;
    public function curso(){return $this->belongsTo(Curso::class);}
    public function user(){return $this->belongsTo(User::class);}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curso extends Model
{
    use HasFactory;

    public function kit()
    {
        return $this->hasOne(Kit::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

}

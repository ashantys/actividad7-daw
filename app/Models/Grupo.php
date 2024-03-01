<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    public function curso()
    {
        return $this->hasOne(Curso::class);
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}

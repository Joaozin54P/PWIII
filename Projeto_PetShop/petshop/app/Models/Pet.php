<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'nome',
        'especie',
        'genero',
        'raca',
        'responsavel',
        'doenca',
    ];
}

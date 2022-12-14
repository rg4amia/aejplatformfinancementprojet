<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceProfessionelle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'unite',
        'entreprise',
        'fonction',
        'promoteur_id',
        'projetpromoteurone_id'
    ];
}

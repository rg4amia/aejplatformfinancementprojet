<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatVenteRecent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nbre_produit',
        'montant_ventes',
        'montant_depenses',
        'benefices',
        'promoteur_id',
        'projetpromoteurone_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatVenteRecent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nbre_produit',
        'montant_vente',
        'montant_depenses',
        'benefice',
        'promoteur_id',
        'projetpromoteurthree_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetPromoteurThree extends Model
{
    use HasFactory;


    protected $fillable = [
        'intituleprojet',
        'raisonsociale',
        'sigle',
        'typeprojet_id',
        'secteuractivite_id',
        'district_id',
        'commune_id',
        'region_id',
        'divisionregionaleaej_id',
        'descriptionactivite',
        'coutprojet',
        'formejuridique_id',
        'nombreemploi',
        'estnouvelleactivite',
        'planaffaire',
        'promoteur_id'
    ];
}

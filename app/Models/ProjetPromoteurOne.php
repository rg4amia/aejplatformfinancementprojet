<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetPromoteurOne extends Model
{
    use HasFactory;

    protected $fillable = [
        "debutprojet",
        "datedebutprojet",
        "niveaumaturation_id",
        "decrireprojet",
        "besoinecono_projet",
        "modelaffaire",
        "strategiemarketing",
        "combien_utilisateur",
        "compoequipe_gestion",
        "role_in_projet",
        "plein_tps_in_projet",
        "resttemps",
        "experienceprecise",
        "descriptionconnaissance_id",
        "formationentrepreunariat",
        "connaissanceaquise",
        "formationgestion",
        "connaissanceaquisegestion",
        "niveaupratiqueentrepreunariat_id",
        "niveaupratiqueentreprise_id",
        "besoinsactuelsformation",
        "besoinsactuelsaccompagnement",
        "besoinenfinancement",
        "montantfinancement",
        "investconcour",
        "autrebesoinsaccompagnement"
    ];
}

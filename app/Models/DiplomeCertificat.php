<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomeCertificat extends Model
{
    use HasFactory;

    protected $fillable = [
        'titrediplome_certificat','nom_etablissement','periode','promoteur_id','projetpromoteurone_id'
    ];
}

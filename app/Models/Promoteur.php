<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promoteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','nom','prenoms','date_naissance','matricule_aej',
        'telephone','sexe_id','situationmatrimoniale_id','niveauetude_id',
        'commune_id','region_id','dernier_diplome','nombreenfant','nombrepers_charge',
        'adressepostale','adressegeoprecise','telfixe','email','cellulaire'
    ];
}

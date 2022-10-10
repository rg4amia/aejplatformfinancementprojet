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
        'adressepostale','adressegeoprecise','telfixe','email','cellulaire','lieunaissance_id',
        'niveauetudeprojet_id'
    ];


    public function sexe(){
        return $this->belongsTo(SexeParam::class,'sexe_id','id');
    }

    public function situationmatrimoniale(){
        return $this->belongsTo(SituationMatrimonialeParam::class,'situationmatrimoniale_id','id');
    }

    public function niveauetude(){
        return $this->belongsTo(NiveauEtudeParam::class,'niveauetude_id','id');
    }

    public function commune(){
        return $this->belongsTo(Commune::class,'commune_id','id');
    }

    public function region(){
        return $this->belongsTo(Region::class,'region_id','id');
    }

}

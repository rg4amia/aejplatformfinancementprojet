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
        'promoteur_id',
        'matriculeprojet'
    ];

    public function typeprojet(){
        return $this->belongsTo(TypeProjet::class,'typeprojet_id', 'id');
    }

    public function secteuractivite()
    {
        return $this->belongsTo(SecteurActivite::class, 'secteuractivite_id','id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id','id');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id','id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id','id');
    }

    public function agenceregionale()
    {
        return $this->belongsTo(AgenceRegionale::class, 'divisionregionaleaej_id','id');
    }

    public function formejuridique()
    {
        return $this->belongsTo(FormeJuridique::class, 'formejuridique_id','id');
    }

    public function promoteur()
    {
        return $this->belongsTo(Promoteur::class, 'promoteur_id','id');
    }
}

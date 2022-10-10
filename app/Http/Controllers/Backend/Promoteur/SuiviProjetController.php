<?php

namespace App\Http\Controllers\Backend\Promoteur;

use App\Http\Controllers\Controller;
use App\Models\ProjetPromoteurThree;
use Illuminate\Http\Request;

class SuiviProjetController extends Controller
{
    public function index(){

        $projets = ProjetPromoteurThree::where('promoteur_id',promoteurLogin()->id)->get();
        return view('backend.pages.promoteur.suivie.suivieprojet',compact('projets'));
    }
}

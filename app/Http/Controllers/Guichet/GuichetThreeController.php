<?php

namespace App\Http\Controllers\Guichet;

use App\Http\Controllers\Controller;
use App\Models\AgenceRegionale;
use App\Models\Commune;
use App\Models\District;
use App\Models\FormeJuridique;
use App\Models\Region;
use App\Models\SecteurActivite;
use App\Models\StatutProjet;
use App\Models\TypeProgramme;
use App\Models\TypeProjet;
use App\Models\Ville;
use Illuminate\Http\Request;

class GuichetThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.guichetThree.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function form_projetguichet3()
    {

<<<<<<< HEAD
        $secteuractivites = SecteurActivite::orderBy('libelle', 'ASC')->get();
        $formejuridiques  = FormeJuridique::orderBy('libelle', 'ASC')->get();
        $regions          = Region::orderBy('nom', 'ASC')->get();
        $villes           = Ville::orderBy('nom', 'ASC')->get();
        $communes         = Commune::orderBy('nom', 'ASC')->get();
        $divisions        = AgenceRegionale::orderBy('nom', 'ASC')->get();
        $typeprojets      = TypeProjet::where('deleted_at', null)->orderBy('libelle', 'ASC')->get();
        $typeprogrammes   = TypeProgramme::orderBy('libelle', 'ASC')->get();
        $districts        = District::orderBy('nom', 'ASC')->get();
        $statuts          = StatutProjet::orderBy('libelle', 'ASC')->get();

        $data = [
            'secteuractivites'  => $secteuractivites,
            'formejuridiques'   => $formejuridiques,
            'regions'           => $regions,
            'villes'            => $villes,
            'communes'          => $communes,
            'divisions'         => $divisions,
            'typeprojets'       => $typeprojets,
            'typeprogrammes'    => $typeprogrammes,
            'districts'         => $districts,
            'statuts'           => $statuts,
        ];
        return view('frontend.guichetThree.form_projetguichet3',compact('data'));
=======
        $secteuractivites = SecteurActivite::select('libelle','id')->orderBy('libelle', 'ASC')->get();

        foreach ($secteuractivites as $item) {
            $secteuractivite[$item->id] = $item->libelle;
        }

        $formejuridiques  = FormeJuridique::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();

        foreach ($formejuridiques as $item) {
            $formejuridique[$item->id] = $item->libelle;
        }

        $regions          = Region::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        foreach ($regions as $item) {
            $region[$item->id] = $item->nom;
        }

        $villes           = Ville::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        foreach ($villes as $item) {
            $ville[$item->id] = $item->nom;
        }

        $communes         = Commune::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        foreach ($communes as $item) {
            $commune[$item->id] = $item->nom;
        }

        $divisions        = AgenceRegionale::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        foreach ($divisions as $item) {
            $division[$item->id] = $item->nom;
        }

        $typeprojets      = TypeProjet::select('libelle', 'id')->where('deleted_at', null)->orderBy('libelle', 'ASC')->get();

        foreach ($typeprojets as $item) {
            $typeprojet[$item->id] = $item->libelle;
        }

        $typeprogrammes   = TypeProgramme::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();

         foreach ($typeprogrammes as $item) {
            $typeprogramme[$item->id] = $item->libelle;
        }

        $districts        = District::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        foreach ($districts as $item) {
            $district[$item->id] = $item->nom;
        }

        $statuts          = StatutProjet::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();

        foreach ($statuts as $item) {
            $statut[$item->id] = $item->libelle;
        }

        //dd($data['secteuractivites']);
        return view('frontend.guichetThree.form_projetguichet3', compact(
            'secteuractivite',
            'formejuridique',
            'region',
            'ville',
            'commune',
            'division',
            'typeprojet',
            'typeprogramme',
            'district',
            'statut'));
>>>>>>> 1d0216213148a1f430f1f6d9b8da18d8071ff381
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

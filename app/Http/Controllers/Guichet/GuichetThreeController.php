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

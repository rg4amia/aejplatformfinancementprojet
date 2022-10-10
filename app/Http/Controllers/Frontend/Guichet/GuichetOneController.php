<?php

namespace App\Http\Controllers\Frontend\Guichet;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\NiveauEtudeProjet;
use App\Models\Region;
use App\Models\SexeParam;
use App\Models\SituationMatrimonialeParam;
use Illuminate\Http\Request;

class GuichetOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {


         return view('frontend.guichetOne.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function form_mentor()
    {
        return view('frontend.guichetOne.form_mentor');
    }

    public function form_projetguichet1()
    {
        $sexes = SexeParam::select('libelle','id')->orderBy('libelle', 'ASC')->get();
        $sexe = [0 => 'Selectionner'];
        foreach ($sexes as $item) {
            $sexe[$item->id] = $item->libelle;
        }

        $niveauetudes = NiveauEtudeProjet::select('libelle','id')->orderBy('libelle', 'ASC')->get();
        $niveauetude = [0 => 'Selectionner'];
        foreach ($niveauetudes as $item) {
            $niveauetude[$item->id] = $item->libelle;
        }

        $communes = Commune::select('nom','id')->orderBy('nom', 'ASC')->get();
        $commune = [0 => 'Selectionner'];
        foreach ($communes as $item) {
            $commune[$item->id] = $item->nom;
        }

        $regions          = Region::select('nom', 'id')->orderBy('nom', 'ASC')->get();
        $region = [0 => 'Selectionner'];
        foreach ($regions as $item) {
            $region[$item->id] = $item->nom;
        }

        $situationmatrimoniales = SituationMatrimonialeParam::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $situationmatrimoniale = [0 => 'Selectionner'];
        foreach ($situationmatrimoniales as $item) {
            $situationmatrimoniale[$item->id] = $item->libelle;
        }
        return view('frontend.guichetOne.form_projetguichet1',compact('sexe','niveauetude','commune','region','situationmatrimoniale'));
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

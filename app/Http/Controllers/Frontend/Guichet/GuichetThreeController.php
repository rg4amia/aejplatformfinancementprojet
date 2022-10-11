<?php

namespace App\Http\Controllers\Frontend\Guichet;

use App\Http\Controllers\Controller;
use App\Models\AgenceRegionale;
use App\Models\Commune;
use App\Models\District;
use App\Models\FormeJuridique;
use App\Models\ProjetPromoteurThree;
use App\Models\Region;
use App\Models\SecteurActivite;
use App\Models\StatutProjet;
use App\Models\TypeProgramme;
use App\Models\TypeProjet;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
        $secteuractivites = SecteurActivite::select('libelle','id')->orderBy('libelle', 'ASC')->get();

        $secteuractivite = [0 => 'Selectionner'];

        foreach ($secteuractivites as $item) {
            $secteuractivite[$item->id] = $item->libelle;
        }

        $formejuridiques  = FormeJuridique::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();

        $formejuridique = [0 => 'Selectionner'];

        foreach ($formejuridiques as $item) {
            $formejuridique[$item->id] = $item->libelle;
        }

        $regions          = Region::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        $region = [0 => 'Selectionner'];

        foreach ($regions as $item) {
            $region[$item->id] = $item->nom;
        }

        $villes           = Ville::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        $ville = [0 => 'Selectionner'];

        foreach ($villes as $item) {
            $ville[$item->id] = $item->nom;
        }

        $communes         = Commune::select('nom', 'id')->orderBy('nom', 'ASC')->get();
        $commune = [0 => 'Selectionner'];
        foreach ($communes as $item) {
            $commune[$item->id] = $item->nom;
        }

        $divisions        = AgenceRegionale::select('nom', 'id')->orderBy('nom', 'ASC')->get();

        $division = [0 => 'Selectionner'];

        foreach ($divisions as $item) {
            $division[$item->id] = $item->nom;
        }

        $typeprojets      = TypeProjet::select('libelle', 'id')->where('deleted_at', null)->orderBy('libelle', 'ASC')->get();

        $typeprojet = [0 => 'Selectionner'];
        foreach ($typeprojets as $item) {
            $typeprojet[$item->id] = $item->libelle;
        }

        $typeprogrammes   = TypeProgramme::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $typeprogramme = [0 => 'Selectionner'];

        foreach ($typeprogrammes as $item) {
            $typeprogramme[$item->id] = $item->libelle;
        }

        $districts        = District::select('nom', 'id')->orderBy('nom', 'ASC')->get();
        $district = [0 => 'Selectionner'];
        foreach ($districts as $item) {
            $district[$item->id] = $item->nom;
        }

        $statuts          = StatutProjet::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $statut = [0 => 'Selectionner'];
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make(
            [
                'intituleprojet'             => $request->intituleprojet,
                'raisonsociale'              => $request->raisonsociale,
                'sigle'                      => $request->sigle,
                'typeprojet_id'              => $request->typeprojet_id,
                //'typeprogramme_id'           => $request->typeprogramme_id,
                'secteuractivite_id'         => $request->secteuractivite_id,
                'district_id'                => $request->district_id,
                'commune_id'                 => $request->commune_id,
                'region_id'                  => $request->region_id,
                'divisionregionaleaej_id'    => $request->divisionregionaleaej_id,
                'descriptionactivite'        => $request->descriptionactivite,
                'coutprojet'                 => $request->coutprojet,
                'formejuridique_id'          => $request->formejuridique_id,
                'nombreemploi'               => $request->nombreemploi,
                'estnouvelleactivite'        => $request->estnouvelleactivite,
                'planaffaire'                => $request->planaffaire,
            ],
            [
                'intituleprojet'             => 'required|string',
                'raisonsociale'              => 'required|string',
                'sigle'                      => 'required|string',
                'typeprojet_id'              => 'required|integer',
                //'typeprogramme_id'           => 'required|integer',
                'secteuractivite_id'         => 'required|integer',
                'district_id'                => 'required|integer',
                'commune_id'                 => 'required|integer',
                'region_id'                  => 'required|integer',
                'divisionregionaleaej_id'    => 'required|integer',
                'descriptionactivite'        => 'required|string',
                'coutprojet'                 => 'required|integer',
                'formejuridique_id'          => 'required|integer',
                'nombreemploi'               => 'required_if:nombreemploi,numeric',
                'estnouvelleactivite'        => 'required',
                'planaffaire'                => 'required|mimes:pdf,doc,docx|max:1024',
            ],
            [
                'intituleprojet.required'    => 'Le champ dénomination est obligatoire.',
                'raisonsociale.required'     => 'Le champ raison sociale est obligatoire.',
                'sigle.required'             => 'Le champ sigle est obligatoire.',
                'typeprojet_id.required'     => 'Le champ type projet est obligatoire.',
                'typeprogramme_id.required'  => 'Le champ type programme est obligatoire.',
                'district_id.required'       => 'Le champ district est obligatoire.',
                'commune_id.required'        => 'Le champ commune est obligatoire.',
                'region_id.required'         => 'Le champ region est obligatoire.',
                'coutprojet.required'         => 'Le champ region est obligatoire.',
                'coutprojet.integer'                 => 'Le champ cout projet doit etre un entier.',
                'divisionregionaleaej_id.required'   => 'Le champ agence regionale est obligatoire.',
                'descriptionactivite.required'       => 'Le champ description est obligatoire.',
                'formejuridique_id.required'         => 'Le champ forme juridique est obligatoire.',
                'nombreemploi.numeric'               => 'Le champ nombre emploi doit être numerique.',
                'estnouvelleactivite.required'       => 'Le champ etat du projet est obligatoire.',
                'planaffaire.mimes'                  => 'Le format du fichier non-conforme * (pdf, doc, docx)',
                'planaffaire.max'                    => 'Le fichier ne doit pas être supérieur à 1Mo.',
            ]
        )->validate();


        try {

            if (request()->has('planaffaire')) {
                // Obtenir le fichier image
                $file = $request->file('planaffaire');
                // Créer un nom d'image basé sur le nom de l'utilisateur et l'horodatage actuel.
                $filename = 'planaffaire-' . uniqid(). '.' . $file->getClientOriginalExtension();

                if (Storage::disk('planaffaire')->put($filename,  File::get($file))) {
                    $planaffaire = $filename;
                }
            }

            $projet = ProjetPromoteurThree::create([
                'intituleprojet'             => $request->intituleprojet,
                'raisonsociale'              => $request->raisonsociale,
                'sigle'                      => $request->sigle,
                'typeprojet_id'              => $request->typeprojet_id,
                'secteuractivite_id'         => $request->secteuractivite_id,
                'district_id'                => $request->district_id,
                'commune_id'                 => $request->commune_id,
                'region_id'                  => $request->region_id,
                'divisionregionaleaej_id'    => $request->divisionregionaleaej_id,
                'descriptionactivite'        => $request->descriptionactivite,
                'coutprojet'                 => $request->coutprojet,
                'formejuridique_id'          => $request->formejuridique_id,
                'nombreemploi'               => $request->nombreemploi,
                'estnouvelleactivite'        => $request->estnouvelleactivite,
                'planaffaire'                => $planaffaire,
                'promoteur_id'               => promoteurLogin()->id,
            ]);

            $dayorder = ProjetPromoteurThree::where('created_at', '>=', date('Y-m-d'))->count(); //l'ordre du jour
            $matriculeprojet =  $projet->id . '-' . $dayorder;
            $projet->matriculeprojet = $matriculeprojet;
            $projet->save();

            if ($projet->save()) {
                session()->flash('success', 'Projet crée avec success');
                return redirect()->route('form.projetguichet3.successful');
            }

        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
            return back();
        }
    }

    public function successful()
    {
        if (session()->get('success')) {
            return view('frontend.guichetThree.successfull');
        } else {
            return redirect()->route('form.projetguichet3');
        }
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

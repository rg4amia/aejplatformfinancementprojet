<?php

namespace App\Http\Controllers\Frontend\Guichet;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\DescriptionConnaissanceActivite;
use App\Models\DiplomeCertificat;
use App\Models\ExperienceProfessionelle;
use App\Models\NationaliteParam;
use App\Models\NiveauEtudeProjet;
use App\Models\NiveauMaturationParam;
use App\Models\NiveauPratiqueEntrepreneuriat;
use App\Models\NiveauPratiqueEntreprise;
use App\Models\ProjetPromoteurOne;
use App\Models\Promoteur;
use App\Models\Region;
use App\Models\ResultatVenteRecent;
use App\Models\SexeParam;
use App\Models\SituationMatrimonialeParam;
use App\Models\UniteAnne;
use Database\Seeders\DescrConnaissanceActiviteSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $nationalites      = NationaliteParam::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $nationalite = [0 => 'Selectionner'];
        foreach ($nationalites as $item) {
            $nationalite[$item->id] = $item->libelle;
        }

        $situationmatrimoniales = SituationMatrimonialeParam::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $situationmatrimoniale = [0 => 'Selectionner'];
        foreach ($situationmatrimoniales as $item) {
            $situationmatrimoniale[$item->id] = $item->libelle;
        }

        $uniteannes = UniteAnne::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $uniteanne = [0 => 'Selectionner'];
        foreach ($uniteannes as $item) {
            $uniteanne[$item->id] = $item->libelle;
        }

        $niveaumaturations = NiveauMaturationParam::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $niveaumaturation = [0 => 'Selectionner'];
        foreach ($niveaumaturations as $item) {
            $niveaumaturation[$item->id] = $item->libelle;
        }

        $descriconnaissanceactivites = DescriptionConnaissanceActivite::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $descriconnaissanceactivite = [0 => 'Selectionner'];
        foreach ($descriconnaissanceactivites as $item) {
            $descriconnaissanceactivite[$item->id] = $item->libelle;
        }

        $niveaupratiqueentrepreneuriats = NiveauPratiqueEntrepreneuriat::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $niveaupratiqueentrepreneuriat = [0 => 'Selectionner'];
        foreach ($niveaupratiqueentrepreneuriats as $item) {
            $niveaupratiqueentrepreneuriat[$item->id] = $item->libelle;
        }

        $niveaupratiqueentreprises = NiveauPratiqueEntreprise::select('libelle', 'id')->orderBy('libelle', 'ASC')->get();
        $niveaupratiqueentreprise = [0 => 'Selectionner'];
        foreach ($niveaupratiqueentreprises as $item) {
            $niveaupratiqueentreprise[$item->id] = $item->libelle;
        }

        return view('frontend.guichetOne.form_projetguichet1',compact('sexe','niveauetude',
            'commune','region','situationmatrimoniale','nationalite','uniteanne',
            'niveaumaturation','descriconnaissanceactivite','niveaupratiqueentrepreneuriat',
            'niveaupratiqueentreprise'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validated = Validator::make(
            [
                'nom'                   => $request->nom,
                'prenom'                => $request->prenom,
                'datedenaissance'       => $request->datedenaissance,
                'lieudenaissance_id'    => $request->lieudenaissance_id,
                'sexe_id'               => $request->sexe_id,
                'nationalite_id'        => $request->nationalite_id,
                'niveauetudeprojet_id'  => $request->niveauetudeprojet_id,
                'dernier_diplome'           => $request->dernier_diplome,
                'situationmatrimoniale_id'  => $request->situationmatrimoniale_id,
                'nombreenfant'              => $request->nombreenfant,
                'nombrepers_charge'         => $request->nombrepers_charge,
                'commune_id'                => $request->commune_id,
                'region_id'                 => $request->region_id,
                'adressepostale'            => $request->adressepostale,
                'adressegeoprecise'         => $request->adressegeoprecise,
                'telfixe'                   => $request->telfixe,
                'cellulaire'                => $request->cellulaire,
                'email'                     => $request->email,
                'exp'                     => $request->exp,
                'exp1'                     => $request->exp1,
                'exp2'                     => $request->exp2,
                'exppro'                     => $request->exppro,
                'exppro1'                     => $request->exppro1,
                'exppro2'                     => $request->exppro2,

                'debutprojet'                     => $request->debutprojet,
                'datedebutprojet'                     => $request->datedebutprojet,
                'niveaumaturation_id'                     => $request->niveaumaturation_id,
                'decrireprojet'                     => $request->decrireprojet,
                'besoinecono_projet'                     => $request->besoinecono_projet,
                'modelaffaire'                     => $request->modelaffaire,
                'strategiemarketing'                     => $request->strategiemarketing,
                'combien_utilisateur'                     => $request->combien_utilisateur,


                'result'                     => $request->result,
                'result1'                     => $request->result1,
                'result2'                     => $request->result2,
                'result3'                     => $request->result3,
                'result4'                     => $request->result4,
                'result5'                     => $request->result5,

                'compoequipe_gestion'        => $request->compoequipe_gestion,
                'role_in_projet'        => $request->role_in_projet,
                'plein_tps_in_projet_'        => $request->plein_tps_in_projet_,
                'resttemps'        => $request->resttemps,
                'experienceprecise'        => $request->experienceprecise,
                'descriptionconnaissance_id'        => $request->descriptionconnaissance_id,
                'formationentrepreunariat'        => $request->formationentrepreunariat,
                'connaissanceaquise'        => $request->connaissanceaquise,
                'formationgestion'        => $request->formationgestion,
                'connaissanceaquisegestion'        => $request->connaissanceaquisegestion,
                'niveaupratiqueentrepreneuriat_id'        => $request->niveaupratiqueentrepreunariat_id,
                'niveaupratiqueentreprise_id'        => $request->niveaupratiqueentreprise_id,
                'besoinsactuelsformation'        => $request->besoinsactuelsformation,
                'besoinsactuelsaccompagnement'        => $request->besoinsactuelsaccompagnement,
                'besoinenfinancement'        => $request->besoinenfinancement,
                'montantfinancement'        => $request->montantfinancement,
                'investconcour'        => $request->investconcour,
                'autrebesoinsaccompagnement'        => $request->autrebesoinsaccompagnement,
            ],
            [
                'nom'             => 'required|string',
                'prenom'             => 'required|string',
                'datedenaissance'             => 'required|date',
                'lieudenaissance_id'             => 'required|integer',
                'sexe_id'             => 'required|integer',
                'nationalite_id'             => 'required|integer',
                'niveauetudeprojet_id'             => 'required|integer',
                'dernier_diplome'             => 'required|string',
                'situationmatrimoniale_id'             => 'required|integer',
                'nombreenfant'             => 'required|integer',
                'nombrepers_charge'             => 'required|integer',
                'commune_id'             => 'required|integer',
                'region_id'             => 'required|integer',
                'adressepostale'             => 'required|string',
                'adressegeoprecise'             => 'required|string',
                'telfixe'             => 'required|digits:10|numeric',
                'cellulaire'             => 'required|digits:10|numeric',
                'email'             => 'required|email',
                'exp.certificat'             => 'required|string',
                'exp.etablissement'             => 'required|string',
                'exp.periode'             => 'required|integer',
                'exp1.certificat'             => 'required|string',
                'exp1.etablissement'             => 'required|string',
                'exp1.periode'             => 'required|integer',
                'exp2.certificat'             => 'required|string',
                'exp2.etablissement'             => 'required|string',
                'exp2.periode'             => 'required|integer',
                'exppro.nombre'             => 'required|integer',
                'exppro.unite'             => 'required|integer',
                'exppro.entreprise'             => 'required|string',
                'exppro.fonction'             => 'required|string',
                'exppro1.nombre'             => 'required|integer',
                'exppro1.unite'             => 'required|integer',
                'exppro1.entreprise'             => 'required|string',
                'exppro1.fonction'             => 'required|string',
                'exppro2.nombre'             => 'required|integer',
                'exppro2.unite'             => 'required|integer',
                'exppro2.entreprise'             => 'required|string',
                'exppro2.fonction'             => 'required|string',
                'debutprojet'             => 'required|integer',
                'datedebutprojet'             => 'required|date',
                'niveaumaturation_id'             => 'required|integer',
                'decrireprojet'             => 'required|string',
                'besoinecono_projet'             => 'required|string',
                'modelaffaire'             => 'required|string',
                'strategiemarketing'             => 'required|string',
                'combien_utilisateur'             => 'required|integer',
                'result.nbre_produit'             => 'required|integer',
                'result.montant_vente'             => 'required|integer',
                'result.montant_depenses'             => 'required|integer',
                'result.benefice'             => 'required|integer',

                'result1.nbre_produit'             => 'required|integer',
                'result1.montant_vente'             => 'required|integer',
                'result1.montant_depenses'             => 'required|integer',
                'result1.benefice'             => 'required|integer',

                'result2.nbre_produit'             => 'required|integer',
                'result2.montant_vente'             => 'required|integer',
                'result2.montant_depenses'             => 'required|integer',
                'result2.benefice'             => 'required|integer',

                'result3.nbre_produit'             => 'required|integer',
                'result3.montant_vente'             => 'required|integer',
                'result3.montant_depenses'             => 'required|integer',
                'result3.benefice'             => 'required|integer',

                'result4.nbre_produit'             => 'required|integer',
                'result4.montant_vente'             => 'required|integer',
                'result4.montant_depenses'             => 'required|integer',
                'result4.benefice'             => 'required|integer',

                'result5.nbre_produit'             => 'required|integer',
                'result5.montant_vente'             => 'required|integer',
                'result5.montant_depenses'             => 'required|integer',
                'result5.benefice'             => 'required|integer',

                'compoequipe_gestion'             => 'required|string',
                'role_in_projet'             => 'required|string',
                'plein_tps_in_projet_'             => 'required|integer',
                'resttemps'             => 'required|string',
                'experienceprecise'             => 'required|string',
                'descriptionconnaissance_id'             => 'required|integer',
                'formationentrepreunariat'             => 'required|integer',
                'connaissanceaquise'             => 'required|string',
                'formationgestion'             => 'required|integer',
                'connaissanceaquisegestion'             => 'required|string',
                'niveaupratiqueentrepreunariat_id'             => 'required|integer',
                'niveaupratiqueentreprise_id'             => 'required|integer',
                'besoinsactuelsformation'             => 'required|string',
                'besoinsactuelsaccompagnement'             => 'required|string',
                'besoinenfinancement'             => 'required|integer',
                'montantfinancement'             => 'required|integer',
                'investconcour'             => 'required|string',
                'autrebesoinsaccompagnement'             => 'required|string',
            ],
            [
                'required'    => 'Le champ est obligatoire.',
            ]
        )->validate();*/


        try {

            $promoteur = Promoteur::find(promoteurLogin()->id);
            $promoteur->update([
                  "nom" =>  $request->nom,
                  "prenom" =>  $request->prenom,
                  "datedenaissance" =>  $request->datedenaissance,
                  "lieudenaissance" => $request->lieudenaissance,
                  "sexe_id" => $request->sexe_id,
                  "nationalite_id" =>  $request->nationalite_id,
                  "niveauetudeprojet_id" => $request->niveauetudeprojet_id,
                  "dernier_diplome" => $request->dernier_diplome,
                  "situationmatrimoniale_id" => $request->situationmatrimoniale_id,
                  "nombreenfant" => $request->nombreenfant,
                  "nombrepers_charge" => $request->nombrepers_charge,
                  "commune_id" => $request->commune_id,
                  "region_id" => $request->region_id,
                  "adressepostale" =>$request->adressepostale,
                  "adressegeoprecise" => $request->adressegeoprecise,
                  "telfixe" =>$request->telfixe,
                  "cellulaire" => $request->cellulaire,
                  "email" => $request->email,
            ]);

            //dd($request->all());

            if($promoteur){

                $projet = ProjetPromoteurOne::create([
                     "debutprojet" => $request->debutprojet,
                      "datedebutprojet" => $request->datedebutprojet,
                      "niveaumaturation_id" => $request->niveaumaturation_id,
                      "decrireprojet" => $request->decrireprojet,
                      "besoinecono_projet" => $request->besoinecono_projet,
                      "modelaffaire" => $request->modelaffaire,
                      "strategiemarketing" => $request->strategiemarketing,
                      "combien_utilisateur" => $request->combien_utilisateur,
                      "compoequipe_gestion" => $request->compoequipe_gestion,
                      "role_in_projet" => $request->role_in_projet,
                      "plein_tps_in_projet" => $request->plein_tps_in_projet,
                      "resttemps" => $request->resttemps,
                      "experienceprecise" => $request->experienceprecise,
                      "descriptionconnaissance_id" => $request->descriptionconnaissance_id,
                      "formationentrepreunariat" => $request->formationentrepreunariat,
                      "connaissanceaquise" => $request->connaissanceaquise,
                      "formationgestion" =>  $request->formationgestion,
                      "connaissanceaquisegestion" => $request->connaissanceaquisegestion,
                      "niveaupratiqueentrepreunariat_id" => $request->niveaupratiqueentrepreneuriat_id,
                      "niveaupratiqueentreprise_id" => $request->niveaupratiqueentreprise_id,
                      "besoinsactuelsformation" => $request->besoinsactuelsformation,
                      "besoinsactuelsaccompagnement" => $request->besoinsactuelsaccompagnement,
                      "besoinenfinancement" => $request->besoinenfinancement,
                      "montantfinancement" => $request->montantfinancement,
                      "investconcour" => $request->investconcour,
                      "autrebesoinsaccompagnement" => $request->autrebesoinsaccompagnement,
                ]);

                if($projet){

                        DiplomeCertificat::create(
                            [
                                'titrediplome_certificat' =>  $request->exp['certificat'],
                                'nom_etablissement' =>  $request->exp['etablissement'],
                                'periode' =>  $request->exp['periode'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );
                        DiplomeCertificat::create(
                            [
                                'titrediplome_certificat' =>  $request->exp1['certificat'],
                                'nom_etablissement' =>  $request->exp1['etablissement'],
                                'periode' =>  $request->exp1['periode'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                       DiplomeCertificat::create(
                            [
                                'titrediplome_certificat' =>  $request->exp2['certificat'],
                                'nom_etablissement' =>  $request->exp2['etablissement'],
                                'periode' =>  $request->exp2['periode'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                        ExperienceProfessionelle::create(
                            [
                                'nombre' =>  $request->exppro['nombre'],
                                'unite' =>  $request->exppro['unite'],
                                'entreprise' =>  $request->exppro['entreprise'],
                                'fonction' =>  $request->exppro['fonction'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                        ExperienceProfessionelle::create(
                            [
                                'nombre' =>  $request->exppro1['nombre'],
                                'unite' =>  $request->exppro1['unite'],
                                'entreprise' =>  $request->exppro1['entreprise'],
                                'fonction' =>  $request->exppro1['fonction'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                        $experiencediplome = ExperienceProfessionelle::create(
                            [
                                'nombre' =>  $request->exppro2['nombre'],
                                'unite' =>  $request->exppro2['unite'],
                                'entreprise' =>  $request->exppro2['entreprise'],
                                'fonction' =>  $request->exppro2['fonction'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                        $experiencediplome = ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result['nbre_produit'],
                                'montant_vente' =>  $request->result['montant_vente'],
                                'montant_depenses' =>  $request->result['montant_depenses'],
                                'benefice' =>  $request->result['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                      ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result1['nbre_produit'],
                                'montant_vente' =>  $request->result1['montant_vente'],
                                'montant_depenses' =>  $request->result1['montant_depenses'],
                                'benefice' =>  $request->result1['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                         ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result2['nbre_produit'],
                                'montant_vente' =>  $request->result2['montant_vente'],
                                'montant_depenses' =>  $request->result2['montant_depenses'],
                                'benefice' =>  $request->result2['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                        ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result3['nbre_produit'],
                                'montant_vente' =>  $request->result3['montant_vente'],
                                'montant_depenses' =>  $request->result3['montant_depenses'],
                                'benefice' =>  $request->result3['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );

                       ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result['nbre_produit'],
                                'montant_vente' =>  $request->result['montant_vente'],
                                'montant_depenses' =>  $request->result['montant_depenses'],
                                'benefice' =>  $request->result['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );
                    }

                        ResultatVenteRecent::create(
                            [
                                'nbre_produit' =>  $request->result5['nbre_produit'],
                                'montant_vente' =>  $request->result5['montant_vente'],
                                'montant_depenses' =>  $request->result5['montant_depenses'],
                                'benefice' =>  $request->result5['benefice'],
                                'promoteur_id' =>  promoteurLogin()->id,
                                'projetpromoteurthree_id' => $projet->id,
                            ]
                        );
                    }



        } catch (\Exception $e){
            dd($e->getMessage());
        }

        /*"nom" => "traore"
  "prenom" => "messedjan"
  "datedenaissance" => "1975-05-18"
  "lieudenaissance" => "1975-05-18"
  "sexe_id" => "1"
  "nationalite_id" => "1"
  "niveauetudeprojet_id" => "0"
  "dernier_diplome" => "TEST"
  "situationmatrimoniale_id" => "2"
  "nombreenfant" => "2"
  "nombrepers_charge" => "5"
  "commune_id" => "0"
  "region_id" => "19"
  "adressepostale" => null
  "adressegeoprecise" => "test"
  "telfixe" => "0998989098"
  "cellulaire" => "0704762810"
  "email" => "ahout76@yahoo.fr"
  "exp" => array:3 [▼
    "certificat" => "test"
    "etablissement" => "test"
    "periode" => "2022"
  ]
  "exppro" => array:4 [▼
    "nombre" => "3"
    "unite" => "2"
    "entreprise" => "test"
    "fonction" => "derche"
  ]
  "debutprojet" => "1"
  "datedebutprojet" => "2022-10-12"
  "niveaumaturation_id" => "5"
  "descrireprojet" => "test"
  "besoinecono_projet" => "ets"
  "modelaffaire" => "test"
  "strategiemarketing" => "test"
  "combien_utilisateur" => "4"
  "result" => array:4 [▼
    "nbre_produit" => "500"
    "montant_vente" => "500"
    "montant_depenses" => "500"
    "benefice" => "500"
  ]
  "compoequipe_gestion" => "test"
  "role_in_projet" => "test"
  "plein_tps_in_projet_" => "1"
  "resttemps" => "test"
  "experienceprecise" => "test"
  "descriptionconnaissance_id" => "1"
  "formationentrepreunariat" => "1"
  "connaissanceaquise" => "test"
  "formationgestion" => "1"
  "connaissanceaquisegestion" => "test"
  "niveaupratiqueentrepreneuriat_id" => "1"
  "niveaupratiqueentreprise_id" => "1"
  "besoinsactuelsformation" => "test"
  "besoinsactuelsaccompagnement" => "test"
  "besoinenfinancement" => "1"
  "montantfinancement" => "50000"
  "investconcour" => "test"
  "autrebesoinsaccompagnement" => "test"*/
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

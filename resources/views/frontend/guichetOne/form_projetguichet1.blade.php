@extends('frontend.layout.main_form')
@section('css')

<style type="text/css">
    /* Style the form */
#regForm {
  background-color: #ffffff;
 /* margin: 100px auto;
  padding: 40px;*/
  width: 100%;
  min-width: 300px;
}

/* Style the input fields */
/*input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}*/

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

</style>

@endsection

@section('content')
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Mentorat solidaire (Business Angel)  </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="{{ route('mentor.form') }}" class="bread-acti">Soumettre un projet</a>
                    </li>
                </ul>
                <p>Mentorat solidaire (Business Angel) </p>
            </div>
        </div>
    </section>

    <!--====== TOUR DETAILS ==========-->
    <section>

        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">

                 <div class="tour_head">
                        <h2>Formulaire de soumission</h2>

                    </div>

               <div class="">
                <form id="regForm" action="" class="" >

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <h5>I. INFORMATIONS SUR LE CANDIDAT :</h5>
                       <table>

                        <div class="form-group col-md-4">
                            <label>Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ promoteurLogin()->nom }}" placeholder="Nom"> </div>
                        <div class="form-group col-md-4 ">
                             <label>Prenoms:</label>
                            <input type="text" class="form-control" id="prenom" value="{{ promoteurLogin()->prenoms }}" name="prenom" placeholder="Prénom"> </div>
                        <div class="form-group col-md-4 ">
                             <label>Date de naissance:</label>
                            <input type="date" class="form-control" id="datedenaissance" value="{{ promoteurLogin()->date_naissance  }}" name="datedenaissance" > </div>
                       <div class="form-group col-md-4 ">
                           <label>Lieu de naissance:</label>
                           <input type="text" class="form-control" id="lieudenaissance" value="{{ promoteurLogin()->date_naissance  }}" name="lieudenaissance" > </div>
                       <div class="form-group col-md-4">
                           <label>Sexe:</label>
                           <select required="" class="form-control" id="sexe" name="sexe">
                               <option selected="" value=""> -- Sexe -- </option>
                               <option value="1">Masculin</option>
                               <option value="2">Féminin</option>
                           </select>
                       </div>
                       <div class="form-group col-md-4 ">
                           <label>Nationalité:</label>
                           <input type="text" class="form-control" id="nationalite" name="nationalite" >
                       </div>
                       <div class="form-group col-md-4">
                           <label>Niveau d’étude :</label>
                           <select required="" class="form-control" id="niveauEtude" name="niveauEtude">
                               <option selected="" value=""> -- Niveau d’étude  -- </option>
                               <option value="1">Primaire</option>
                               <option value="2">Secondaire</option>
                               <option value="3">Supérieur</option>
                               <option value="4">Autodidacte</option>
                           </select>
                       </div>
                       <div class="form-group col-md-4">
                           <label>Dernier Diplôme:</label>
                           <input type="text" class="form-control" id="dernierDiplome" name="dernierDiplome"> </div>

                         <div class="form-group col-md-4">
                            <label>Situation matrimoniale :</label>
                           <select class="form-control" id="sitMatrimoniale" name="sitMatrimoniale" onchange="displaySitMatrimoniale(this.value)">
                                <option selected="" value=""> -- Situation matrimoniale  -- </option>
                                <option value="1">Marié (e) </option>
                                <option value="2">Célibataire </option>
                                <option value="3">Divorcé (e)</option>
                                <option value="4">Veuf (e)</option>
                                <option value="5">Concubinage </option>
                               <option value="6">autre </option>
                            </select>
                             <input type="text" class="form-control" id="precis_sitMatrimoniale" name="precis_sitMatrimoniale" placeholder="svp, Précisez!" style="display:none">
                        </div>

                        <div class="form-group col-md-4">
                             <label>Nombre d’enfants :</label>
                            <input type="number" class="form-control" id="nbEnfant" name="nbEnfant" > </div>
                            <div class="form-group col-md-4">
                             <label>Nombre de personnes à charge :</label>
                            <input type="number" class="form-control" id="nbPersonne" name="nbPersonne" > </div>

                            <div class="form-group col-md-4">
                             <label>Ville / Commune:</label>
                            <input type="text" class="form-control" id="commune" name="commune" > </div>
                            <div class="form-group col-md-4 ">
                             <label>Région:</label>
                            <input type="text" class="form-control" id="region" name="region" > </div>
                            <div class="form-group col-md-4 pad-left-o">
                             <label>Adresse postale :</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" > </div>

                            <div class="form-group col-md-4">
                             <label>Adresse géographique précise:</label>
                            <input type="text" class="form-control" id="adresseGeo" name="adresseGeo" > </div>
                            <div class="form-group col-md-4">
                             <label>Tél fixe :</label>
                            <input type="text" class="form-control" id="telFixe" name="telFixe" > </div>
                            <div class="form-group col-md-4">
                             <label>Cellulaire :</label>
                            <input type="text" class="form-control" id="celullaire" name="celullaire" > </div>

                            <div class="form-group col-md-4">
                             <label>Email :</label>
                            <input type="email" class="form-control" id="email" name="email" ></div>
                            <br>
                       </table>

                    </div>

                    <div class="tab">
                        <h5>II. EDUCATION ET EXPERIENCE PROFESSIONNELLE :</h5>
                         <h5>2.1. Veuillez indiquer vos diplômes et/ou certificats en commençant par les plus récents</h5>
                        <table>

                            <div class="form-group col-md-4">
                            <label>Titre du diplôme/ certificat:</label>
                            <input type="text" class="form-control" id="certificat1" name="certificat1" placeholder="Titre du diplôme/ certificat"> </div>
                        <div class="form-group col-md-4">
                             <label>Nom de l’établissement:</label>
                            <input type="text" class="form-control" id="etablissement1" name="etablissement1" placeholder="Nom de l’établissement"> </div>
                        <div class="form-group col-md-4">
                             <label>Période :</label>
                            <input type="text" class="form-control" id="periode1" name="periode1" > </div>

                            <div class="form-group col-md-4">
                                <label>Titre du diplôme/ certificat:</label>
                                <input type="text" class="form-control" id="certificat2" name="certificat2" placeholder="Titre du diplôme/ certificat"> </div>
                            <div class="form-group col-md-4">
                                <label>Nom de l’établissement:</label>
                                <input type="text" class="form-control" id="etablissement2" name="etablissement2" placeholder="Nom de l’établissement"> </div>
                            <div class="form-group col-md-4">
                                <label>Période :</label>
                                <input type="text" class="form-control" id="periode2" name="periode2" > </div>

                            <div class="form-group col-md-4">
                                <label>Titre du diplôme/ certificat:</label>
                                <input type="text" class="form-control" id="certificat3" name="certificat3" placeholder="Titre du diplôme/ certificat"> </div>
                            <div class="form-group col-md-4">
                                <label>Nom de l’établissement:</label>
                                <input type="text" class="form-control" id="etablissement3" name="etablissement3" placeholder="Nom de l’établissement"> </div>
                            <div class="form-group col-md-4">
                                <label>Période :</label>
                                <input type="text" class="form-control" id="periode3" name="periode3" > </div>

                        </table>
                        <h5>2.2. Veuillez rappeler votre expérience professionnelle </h5>
                        <table>

                        <div class="form-group col-md-2">
                        <label>Nombre :</label>
                        <input type="number" class="form-control" id="nbreUnite1" name="nbreUnite1" placeholder=""> </div>
                        <div class="form-group col-md-2">
                         <label>Unité :</label>
                        <select class="form-control" id="unite1" name="unite1">
                            <option value="1">Année </option>
                            <option value="2">Mois </option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label>Entreprise :</label>
                        <input type="text" class="form-control" id="entreprise1" placeholder="Entreprise1"> </div>
                        <div class="form-group col-md-4">
                         <label>Poste ou fonction  :</label>
                        <input type="text" class="form-control" id="fonction1" name="fonction1" placeholder="Poste ou fonction"> </div>

                        <div class="form-group col-md-2">
                        <label>Nombre :</label>
                        <input type="number" class="form-control" id="nbreUnite2" name="nbreUnite2" placeholder=""> </div>
                        <div class="form-group col-md-2">
                         <label>Unité :</label>
                        <select class="form-control" id="unite2" name="unite2">
                            <option value="1">Année </option>
                            <option value="2">Mois </option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label>Entreprise :</label>
                        <input type="text" class="form-control" id="entreprise2" placeholder="Entreprise2"> </div>
                        <div class="form-group col-md-4">
                         <label>Poste ou fonction  :</label>
                        <input type="text" class="form-control" id="fonction2" name="fonction2" placeholder="Poste ou fonction"> </div>

                        <div class="form-group col-md-2">
                        <label>Nombre :</label>
                        <input type="number" class="form-control" id="nbreUnite3" name="nbreUnite3" placeholder=""> </div>
                        <div class="form-group col-md-2">
                         <label>Unité :</label>
                        <select class="form-control" id="unite3" name="unite3">
                            <option value="1">Année </option>
                            <option value="2">Mois </option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label>Entreprise :</label>
                        <input type="text" class="form-control" id="entreprise3" placeholder="Entreprise3"> </div>
                        <div class="form-group col-md-4">
                         <label>Poste ou fonction  :</label>
                        <input type="text" class="form-control" id="fonction2" name="fonction2" placeholder="Poste ou fonction"> </div>
                        </table>

                    </div>

                    <div class="tab">
                         <h5>III. PRESENTATION DE L’IDEE DE PROJET ET/OU L’ENTREPRISE :</h5>
                        <h6>3.1.    Quelle est la dénomination de votre projet ?   </h6>

                        <table>

                        <div class="form-group row">

                        <div class="col-md-4">
                            <label >3.2. Avez-vous débuté le projet ?</label>
                           <select  class="form-control" id="debutProjet" name="debutProjet" onchange="displayDebutProjet(this.value)">
                                 <option value=""> </option>
                                <option value="1">OUI </option>
                                <option value="2">NON </option>
                            </select>
                        </div>

                        <div class="col-md-2" id="dateDebutProjet" style="display:none">
                             <label >Début du projet</label>
                            <input type="date" class="form-control"  name="dateDebutProjet" placeholder="Date Début du projet">
                        </div>

                        <div class="col-md-6">
                            <label>3.3. Comment décrirez-vous le niveau de maturation de votre projet ?</label>
                           <select  class="form-control" id="descriptionMaturation" name="descriptionMaturation">
                                <option value="1">Idée: Vous avez le business model mais n'avez pas encore développé la solution technique  </option>
                                <option value="2">Prototype: La solution est déjà développée et vous êtes en phase de test  </option>
                                <option value="3">Revenus: Votre produit a déjà des utilisateurs qui le paient et vous êtes activement en train de vendre/distribuer</option>
                                <option value="4">Scaling: Votre équipe cherche à passer à échelle dans d'autres villes/pays/ d'autres verticales </option>
                            </select>
                        </div>

                        </div>

                        <div class="form-group row">
                             <div class="col-sm-6" >
                             <label>3.4. Pouvez-vous décrire votre projet ?</label>
                            <textarea placeholder="" class="form-control" id="descriptionProjet" name="descriptionProjet"></textarea>
                             </div>

                        <div class="form-group col-md-6">
                             <label>3.5. A quel besoin économique votre projet ou idée répond-il ?</label>
                            <textarea placeholder="" class="form-control" id="reponseEconomique" name="reponseEconomique"></textarea> </div>
                        </div>
                       <div class="form-group row">

                        <div class="col-md-6">
                            <label>3.6. Quel est votre business model (modèle économique ou modèle d’affaires) ?</label>
                            <textarea placeholder="" class="form-control" id="businessModel" name="businessModel"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                             <label>3.7. Quel est le marché cible ? quelle est votre stratégie marketing ?</label>
                            <textarea placeholder="" class="form-control" id="marcheCyble" name="marcheCyble"></textarea> </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                             <label>3.8. Si déjà en activité, combien avez-vous d’utilisateurs ou clients ? combien d’utilisateurs paient l’usage du produit ou du service ?</label>
                            <input class="form-control" type="number" name="nombreClient" id="nombreClient">
                        </div>

                         <div class="col-md-6">

                         </div>

                        </div>

                        </table>

                        <div class="form-group row col-md-12">

                            <div class="col-md-12">

                        3.9. Si déjà en activité, quels sont vos résultats les plus récents en termes de vente de vos produits sur les 6 derniers mois ?

                         <table >
                            <thead>
                                <th>Rubriques</th>
                                <th>Période 1</th>
                                <th>Période 2</th>
                                <th>Période 3</th>
                                <th>Période 4</th>
                                <th>Période 5</th>
                                <th>Période 6</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30%">Nombre de produits vendus</td>
                                    <td><input type="number" class="form-control" id="produitVendu1" name="produitVendu1" ></td>
                                    <td><input type="number" class="form-control" id="produitVendu2" name="produitVendu2" ></td>
                                    <td><input type="number" class="form-control" id="produitVendu3" name="produitVendu3" ></td>
                                    <td><input type="number" class="form-control" id="produitVendu4" name="produitVendu4" ></td>
                                    <td><input type="number" class="form-control" id="produitVendu5" name="produitVendu5" ></td>
                                    <td><input type="number" class="form-control" id="produitVendu6" name="produitVendu6" ></td>
                                </tr>

                                <tr>
                                    <td>Montant des ventes</td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu1" name="montantProduitVendu1" ></td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu2" name="montantProduitVendu2" ></td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu3" name="montantProduitVendu3" ></td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu4" name="montantProduitVendu4" ></td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu5" name="montantProduitVendu5" ></td>
                                    <td><input type="number" class="form-control" id="montantProduitVendu6" name="montantProduitVendu6" ></td>
                                </tr>

                                <tr>
                                    <td>Montant des dépenses (charges)</td>
                                    <td><input type="number" class="form-control" id="montantDepense1" name="montantDepense1" ></td>
                                    <td><input type="number" class="form-control" id="montantDepense2" name="montantDepense2" ></td>
                                    <td><input type="number" class="form-control" id="montantDepense3" name="montantDepense3" ></td>
                                    <td><input type="number" class="form-control" id="montantDepense4" name="montantDepense4" ></td>
                                    <td><input type="number" class="form-control" id="montantDepense5" name="montantDepense5" ></td>
                                    <td><input type="number" class="form-control" id="montantDepense6" name="montantDepense6" ></td>
                                </tr>

                                <tr>
                                    <td>Bénéfices</td>
                                    <td><input type="number" class="form-control" id="benefice1" name="benefice1" ></td>
                                    <td><input type="number" class="form-control" id="benefice2" name="benefice2" ></td>
                                    <td><input type="number" class="form-control" id="benefice3" name="benefice3" ></td>
                                    <td><input type="number" class="form-control" id="benefice4" name="benefice4" ></td>
                                    <td><input type="number" class="form-control" id="benefice5" name="benefice5" ></td>
                                    <td><input type="number" class="form-control" id="benefice6" name="benefice6" ></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    </div>
<br>
                        <table>
                   <div class="form-group row">
                        <div class="col-md-6 ">
                            <label>3.10. Quel est la composition de votre équipe de gestion ? </label>
                           <textarea placeholder="" class="form-control" id="compositionEquipe" name="compositionEquipe"></textarea>
                        </div>
                        <div class="col-md-6 ">
                            <label>3.11.    Quel est votre rôle dans le projet ?</label>
                           <textarea placeholder="" class="form-control" id="monRole" name="monRole"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 ">
                             <label>3.12.   Etes-vous à plein temps dans le projet ? </label>
                           <select  class="form-control" id="pleinTemps" name="pleinTemps" onchange="displayPleinTemps(this.value)">
                                 <option value=""> </option>
                                <option value="1">OUI </option>
                                <option value="2">NON </option>
                            </select>
                        </div>
                        <div class="col-md-4" id="restTemps" style="display:none">
                             <label >Que faîtes-vous le reste du temps ?</label>
                             <textarea class="form-control"  name="restTemps" placeholder="Que faîtes-vous le reste du temps ?"></textarea>
                        </div>

                        <div class="col-md-4">
                             <label>3.13.	Décrivez le plus précisément possible votre expérience dans l’activité envisagée</label>
                            <textarea class="form-control"  name="experiencePrecise" placeholder=""></textarea> </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                            <label>3.14. Comment pouvez-vous décrire votre niveau de connaissance de l’activité/ métier ? </label>
                            <select  class="form-control" id="descriptionConnaissance" name="descriptionConnaissance">
                                <option value="1">Aucune connaissance</option>
                                <option value="2">Connaissance de base (généralités)  </option>
                                <option value="3">Connaissance moyenne (maîtrise moyenne des concepts clés)</option>
                                <option value="4">Connaissance approfondie (maîtrise globale du processus global)</option>
                            </select>
                         </div>
                        <div class="col-md-4">
                             <label>3.15. Avez-vous pris part à une formation en entrepreneuriat ? </label>
                            <select  class="form-control" id="formationEntrepreunariat" name="formationEntrepreunariat" onchange="displayFormationEntrepreunariat(this.value)">
                                 <option value=""> </option>
                                <option value="1">OUI </option>
                                <option value="2">NON </option>
                            </select>
                             </div>
                        <div class="col-md-4" id="connaissanceAquise" style="display: none;">
                             <label>Formation & Connaissance acquises </label>
                           <textarea class="form-control"  name="connaissanceAquise" placeholder=""></textarea>
                             </div>
                       </div>

                         <div class="form-group row">
                            <div class="col-md-4">
                             <label>3.16.	Avez-vous pris part à une formation en gestion d’entreprises ? </label>
                           <select  class="form-control" id="formationGestion" name="formationGestion" onchange="displayFormationGestion(this.value)">
                                 <option value=""> </option>
                                <option value="1">OUI </option>
                                <option value="2">NON </option>
                            </select>
                        </div>
                         <div class="col-md-4" id="connaissanceAquiseGestion" style="display: none;">
                             <label>Formation & Connaissance acquises </label>
                           <textarea class="form-control"  name="connaissanceAquiseGestion" placeholder=""></textarea>
                             </div>

                            <div class="col-md-4">
                                <label>3.17. Comment pouvez-vous décrire votre niveau de pratique en entrepreneuriat ?  </label>
                                <select  class="form-control" id="niveauPratiqueEntrepreunariat" name="niveauPratiqueEntrepreunariat">
                                 <option value=""> </option>
                                <option value="1">Aucune connaissance </option>
                                <option value="2">Connaissance de base (généralités)  </option>
                                 <option value="3">Connaissance moyenne (réaliser une étude de marché, établir un compte d’exploitation…) </option>
                                <option value="4">Connaissance approfondie (élaborer entièrement un business plan)  </option>
                            </select>
                        </div>
                    </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                <label>3.18. Comment pouvez-vous décrire votre niveau de pratique en gestion d’entreprise  </label>
                                <select  class="form-control" id="niveauPratiqueEntreprise" name="niveauPratiqueEntreprise">
                                 <option value=""> </option>
                                <option value="1">Aucune connaissance </option>
                                <option value="2">Connaissance de base (généralités)  </option>
                                 <option value="3">Connaissance moyenne  </option>
                                <option value="4">Connaissance approfondie</option>
                            </select>
                             </div>
                         </div>

                        </table>
                    </div>

                    <div class="tab">
                        <h5>IV. BESOINS : </h5>
                      <table class="col-12">

                        <div class="form-group row">
                            <div class="col-md-6">
                            <label>4.1. Quels sont vos besoins actuels en formation pour mener à bien votre projet ?</label>
                           <textarea placeholder="Besoin actuels en formation" id="besoinsActuelsFormation" name="besoinsActuelsFormation" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>4.2. Quels sont vos besoins actuels en accompagnement technique ou en gestion pour mener à bien votre projet ?</label>
                           <textarea placeholder="Besoins actuels en accompagnement" id="besoinsActuelsAccompagnement" name="besoinsActuelsAccompagnement" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                            <div class="col-md-4">
                             <label>4.3. Avez-vous un besoin de financement ? </label>
                           <select  class="form-control" id="formationGestion" name="formationGestion" onchange="displayBesoinEnFinancement(this.value)">
                                 <option value=""> </option>
                                <option value="1">OUI </option>
                                <option value="2">NON </option>
                            </select>
                        </div>
                         <div class="col-md-4" id="besoinEnFinancement" style="display: none;">
                             <label>Quel est le montant en FCFA </label>
                           <input type="number" class="form-control"  name="besoinEnFinancement" placeholder="Montant en FCFA">
                             </div>

                            <div class="col-md-4">
                                <label>4.4. Quels sont les investissements à réaliser avec le concours financier sollicité</label>
                                <textarea placeholder="" id="investissementConcour" name="investissementConcour" class="form-control"></textarea>
                        </div>
                    </div>

                        <div class="form-group row">
                             <div class="col-md-6 ">
                             <label>4.2. Avez-vous d’autres besoins d’accompagnement (coaching, suivi, etc.)</label>
                            <textarea placeholder="Autres bésoins"  id="autreBesoinsAccompagnement" name="autreBesoinsAccompagnement" class="form-control"></textarea>
                        </div>
                    </div>


                        </table>
                    </div>
                    <br>


                        <div class="row" style="float:right; ">

                        <div  style="text-align:center;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <div">
                                <button type="button" id="prevBtn" class="btn btn-warning btn-rounded" onclick="nextPrev(-1)">Précédent</button>
                                <button type="button" id="nextBtn" class="btn btn-info btn-rounded" onclick="nextPrev(1)">Suivant</button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection


 @section('js')

 <script type="text/javascript">
     var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Soumettre";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    // if (y[i].value == "") {
    //    add an "invalid" class to the field:
    //   y[i].className += " invalid";
    //    and set the current valid status to false:
    //   valid = false;
    // }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function displaySitMatrimoniale(id) {

    if(id==6){$('#precis_sitMatrimoniale').css("display","block");;}else{$('#precis_sitMatrimoniale').css("display","none");;}

}

function displayDebutProjet(id) {

    if(id==1){$('#dateDebutProjet').css("display","block");;}else{$('#dateDebutProjet').css("display","none");;}

}

function displayPleinTemps(id) {

    if(id==1){$('#restTemps').css("display","block");;}else{$('#restTemps').css("display","none");;}

}

function displayFormationEntrepreunariat(id) {

    if(id==1){$('#connaissanceAquise').css("display","block");;}else{$('#connaissanceAquise').css("display","none");;}

}

function displayFormationGestion(id) {

    if(id==1){$('#connaissanceAquiseGestion').css("display","block");;}else{$('#connaissanceAquiseGestion').css("display","none");;}

}

function displayBesoinEnFinancement(id) {

    if(id==1){$('#besoinEnFinancement').css("display","block");;}else{$('#besoinEnFinancement').css("display","none");;}

}



 </script>

@endsection


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
                <h2><span>Mentorat solidaire (Business Angel) </span> <!-- Family Package -->
                </h2>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a>
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
                    <form id="regForm" action="{{ route('form.projetguichet1.store') }}" method="POST" class="">
                        @csrf()
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <h5>INFORMATIONS SUR LE CANDIDAT :</h5>
                            <table>
                                <div class="form-group col-md-4">
                                    <label>Nom:</label>
                                    <input type="text" class="form-control" id="nom" name="nom"
                                        value="{{ promoteurLogin()->nom }}" placeholder="Nom">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label>Prenoms:</label>
                                    <input type="text" class="form-control" id="prenom"
                                        value="{{ promoteurLogin()->prenoms }}" name="prenom" placeholder="Pr??nom">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label>Date de naissance:</label>
                                    <input type="date" class="form-control" id="datedenaissance"
                                        value="{{ promoteurLogin()->date_naissance }}" name="datedenaissance">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label>Lieu de naissance:</label>
                                   {{-- <input type="text" class="form-control" id="lieudenaissance"
                                        value="" name="lieudenaissance">--}}
                                    {!! Form::select('lieudenaissance_id', $commune, promoteurLogin()->lieudenaissance_id, [
                                       'class' => 'select2-region form-control',
                                       'required' => true,
                                   ]) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Sexe:</label>
                                    {!! Form::select('sexe_id', $sexe, promoteurLogin()->sexe_id, [
                                        'class' => 'select2-region form-control',
                                        'required' => true,
                                    ]) !!}
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label>Nationalit??:</label>
                                    {!! Form::select('nationalite_id', $nationalite, promoteurLogin()->nationalite_id, [
                                        'class' => 'select2-region form-control',
                                        'required' => true,
                                    ]) !!}

                                    {{--  <input type="text" class="form-control" id="nationalite" name="nationalite" > --}}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Niveau d?????tude :</label>
                                    {!! Form::select('niveauetudeprojet_id', $niveauetude, promoteurLogin()->niveauetudeprojet_id, [
                                        'class' => 'select2-region form-control',
                                        'required' => true,
                                    ]) !!}
                                    {{-- <select required="" class="form-control" id="niveauEtude" name="niveauEtude">
                               <option selected="" value=""> -- Niveau d?????tude  -- </option>
                               <option value="1">Primaire</option>
                               <option value="2">Secondaire</option>
                               <option value="3">Sup??rieur</option>
                               <option value="4">Autodidacte</option>
                           </select> --}}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Dernier Dipl??me:</label>
                                    <input type="text" class="form-control"
                                        value="{{ promoteurLogin()->dernier_diplome }}" id="dernierDiplome"
                                        name="dernier_diplome">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Situation matrimoniale :</label>
                                    {!! Form::select(
                                        'situationmatrimoniale_id',
                                        $situationmatrimoniale,
                                        promoteurLogin()->situationmatrimoniale_id,
                                        ['class' => 'select2-region form-control', 'required' => true],
                                    ) !!}
                                    {{-- <select class="form-control" id="sitMatrimoniale" name="sitMatrimoniale" onchange="displaySitMatrimoniale(this.value)">
                                   <option selected="" value=""> -- Situation matrimoniale  -- </option>
                                   <option value="1">Mari?? (e) </option>
                                   <option value="2">C??libataire </option>
                                   <option value="3">Divorc?? (e)</option>
                                   <option value="4">Veuf (e)</option>
                                   <option value="5">Concubinage </option>
                                  <option value="6">autre </option>
                               </select> --}}
                                    {{-- <input type="text" class="form-control" id="precis_sitMatrimoniale" name="precis_sitMatrimoniale" placeholder="svp, Pr??cisez!" style="display:none"> --}}
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Nombre d???enfants :</label>
                                    <input type="number" value="{{ promoteurLogin()->nombreenfant }}" class="form-control"
                                        id="nombreenfant" name="nombreenfant">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nombre de personnes ?? charge :</label>
                                    <input type="number" value="{{ promoteurLogin()->nombrepers_charge }}"
                                        class="form-control" id="nombrepers_charge" name="nombrepers_charge">
                                </div>

                                <div class="form-group col-md-4 ">
                                    <label>R??gion:</label>
                                    <select class="select2-region form-control" required id="region_id" name="region_id" onchange="getVilleByRegionId(this.value)">
                                        <option value="">Selectionnez r??gion</option>
                                        @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->nom}}</option>
                                        @endforeach
                                    </select>
                                    <!-- {!! Form::select('region_id', $region, promoteurLogin()->region_id, [
                                        'class' => 'select2-region form-control',
                                        'required' => true,
                                    ]) !!} -->
                                 </div>

                                <div class="form-group col-md-4">
                                    @php
                                        //dd(promoteurLogin()->commune_id)
                                    @endphp
                                    <label>Ville / Commune:</label>
                                    <select class="select2-region form-control" required id="commune_id" name="commune_id">
                                        <option value="">Selectionnez Ville</option>
                                       
                                    </select>
                                    <!-- {!! Form::select('commune_id', $commune, promoteurLogin()->commune_id, [
                                        'class' => 'select2-region form-control',
                                        'required' => true,
                                    ]) !!} -->
                                    {{-- <input type="text" class="form-control" id="commune" name="commune" > --}}
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Adresse postale :</label>
                                    <input type="text" class="form-control"
                                        value="{{ promoteurLogin()->adressepostale }}" id="adresse" name="adressepostale">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Adresse g??ographique pr??cise:</label>
                                    <input type="text" class="form-control"
                                        value="{{ promoteurLogin()->adressegeoprecise }}" id="adresseGeo"
                                        name="adressegeoprecise">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>T??l fixe :</label>
                                    <input type="text" class="form-control" value="{{ promoteurLogin()->telfixe }}"
                                        id="telFixe" name="telfixe">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cellulaire :</label>
                                    <input type="text" class="form-control" value="{{ promoteurLogin()->cellulaire }}"
                                        id="cellulaire" name="cellulaire">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Email :</label>
                                    <input type="email" class="form-control" value="{{ promoteurLogin()->email }}"
                                        id="email" name="email">
                                </div>
                                <br>
                            </table>
                        </div>

                        <div class="tab">
                            <h5>EDUCATION ET EXPERIENCE PROFESSIONNELLE :</h5>
                            <h5>Veuillez indiquer vos dipl??mes et/ou certificats en commen??ant par les plus r??cents
                            </h5>
                            <table>

                                <div class="form-group col-md-4">
                                    <label>Titre du dipl??me/ certificat:</label>
                                    <input type="text" class="form-control" id="certificat1" name="exp[certificat]"
                                        placeholder="Titre du dipl??me/ certificat">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nom de l?????tablissement:</label>
                                    <input type="text" class="form-control" id="etablissement1" name="exp[etablissement]"
                                        placeholder="Nom de l?????tablissement">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>P??riode :</label>
                                    <input type="text" class="form-control" id="periode1" name="exp[periode]">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Titre du dipl??me/ certificat:</label>
                                    <input type="text" class="form-control" id="certificat2" name="exp1[certificat]"
                                        placeholder="Titre du dipl??me/ certificat">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nom de l?????tablissement:</label>
                                    <input type="text" class="form-control" id="etablissement2" name="exp1[etablissement]"
                                        placeholder="Nom de l?????tablissement">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>P??riode :</label>
                                    <input type="text" class="form-control" id="periode2" name="exp1[periode]">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Titre du dipl??me/ certificat:</label>
                                    <input type="text" class="form-control" id="certificat3" name="exp2[certificat]"
                                        placeholder="Titre du dipl??me/ certificat">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nom de l?????tablissement:</label>
                                    <input type="text" class="form-control" id="etablissement3" name="exp2[etablissement]"
                                        placeholder="Nom de l?????tablissement">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>P??riode :</label>
                                    <input type="text" class="form-control" id="periode3" name="exp2[periode]">
                                </div>

                            </table>
                            <h5>Veuillez rappeler votre exp??rience professionnelle </h5>
                            <table>
                                <div class="form-group col-md-2">
                                    <label>Nombre :</label>
                                    <input type="number" class="form-control" id="nombre" name="exppro[nombre]"
                                        placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit?? :</label>
                                    {!! Form::select('exppro[unite]', $uniteanne, null, ['class' => 'select2-region form-control','required' => true,]) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Entreprise :</label>
                                    <input type="text" class="form-control" id="entreprise" placeholder="entreprise1" name="exppro[entreprise]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Poste ou fonction :</label>
                                    <input type="text" class="form-control" id="fonction1" name="exppro[fonction]"
                                        placeholder="Poste ou fonction">
                                </div>


                                <div class="form-group col-md-2">
                                    <label>Nombre :</label>
                                    <input type="number" class="form-control" id="nombre" name="exppro1[nombre]"
                                           placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit?? :</label>
                                    {!! Form::select('exppro1[unite]', $uniteanne, null, ['class' => 'select2-region form-control','required' => true,]) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Entreprise :</label>
                                    <input type="text" class="form-control" id="entreprise" placeholder="Entreprise1" name="exppro1[entreprise]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Poste ou fonction :</label>
                                    <input type="text" class="form-control" id="fonction2" name="exppro1[fonction]"
                                           placeholder="Poste ou fonction">
                                </div>


                                <div class="form-group col-md-2">
                                    <label>Nombre :</label>
                                    <input type="number" class="form-control" id="nombre" name="exppro2[nombre]"
                                           placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit?? :</label>
                                    {!! Form::select('exppro2[unite]', $uniteanne, null, ['class' => 'select2-region form-control','required' => true,]) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Entreprise :</label>
                                    <input type="text" class="form-control" id="entreprise" placeholder="Entreprise" name="exppro2[entreprise]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Poste ou fonction :</label>
                                    <input type="text" class="form-control" id="fonction3" name="exppro2[fonction]"
                                           placeholder="Poste ou fonction">
                                </div>
                            </table>

                        </div>

                        <div class="tab">
                            <h5>PRESENTATION DE L???IDEE DE PROJET ET/OU L???ENTREPRISE :</h5>
                            <h6>Quelle est la d??nomination de votre projet ? </h6>
                            <table>
                                <div class="form-group row">

                                    <div class="col-md-4">
                                        <label>Avez-vous d??but?? le projet ?</label>
                                        <select class="form-control" id="debutProjet" name="debutprojet"
                                            onchange="displayDebutProjet(this.value)">
                                            <option value=""> </option>
                                            <option value="1">OUI </option>
                                            <option value="2">NON </option>
                                        </select>
                                    </div>

                                    <div class="col-md-2" id="dateDebutProjet" style="display:none">
                                        <label>D??but du projet</label>
                                        <input type="date" class="form-control" name="datedebutprojet" placeholder="Date D??but du projet">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Comment d??crirez-vous le niveau de maturation de votre projet ?</label>
                                        {!! Form::select('niveaumaturation_id', $niveaumaturation, null, ['class' => 'select2-region form-control','required' => true,]) !!}
                                       {{-- <select class="form-control" id="descriptionMaturation"
                                            name="descriptionMaturation">
                                            <option value="1">Id??e: Vous avez le business model mais n'avez pas encore
                                                d??velopp?? la solution technique </option>
                                            <option value="2">Prototype: La solution est d??j?? d??velopp??e et vous ??tes
                                                en phase de test </option>
                                            <option value="3">Revenus: Votre produit a d??j?? des utilisateurs qui le
                                                paient et vous ??tes activement en train de vendre/distribuer</option>
                                            <option value="4">Scaling: Votre ??quipe cherche ?? passer ?? ??chelle dans
                                                d'autres villes/pays/ d'autres verticales </option>
                                        </select>--}}
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Pouvez-vous d??crire votre projet ?</label>
                                        <textarea placeholder="" class="form-control" id="descriptionProjet" name="decrireprojet"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>A quel besoin ??conomique votre projet ou id??e r??pond-il ?</label>
                                        <textarea placeholder="" class="form-control" id="besoinecono_projet" name="besoinecono_projet"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label>
                                            Quel est votre business model (mod??le ??conomique ou mod??le d???affaires) ?
                                        </label>
                                        <textarea placeholder="" class="form-control" id="modelaffaire" name="modelaffaire">
                                        </textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>
                                            Quel est le march?? cible ? quelle est votre strat??gie marketing ?
                                        </label>
                                        <textarea placeholder="" class="form-control" id="strategiemarketing" name="strategiemarketing"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Si d??j?? en activit??, combien avez-vous d???utilisateurs ou clients ?
                                            combien d???utilisateurs paient l???usage du produit ou du service ?</label>
                                        <input class="form-control" type="number" name="combien_utilisateur" id="combien_utilisateur">
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </table>

                            <div class="form-group row col-md-12">
                                <div class="col-md-12">
                                    Si d??j?? en activit??, quels sont vos r??sultats les plus r??cents en termes de vente
                                    de vos produits sur les 6 derniers mois ?
                                    <table>
                                        <thead>
                                            <th>Rubriques</th>
                                            <th>P??riode 1</th>
                                            <th>P??riode 2</th>
                                            <th>P??riode 3</th>
                                            <th>P??riode 4</th>
                                            <th>P??riode 5</th>
                                            <th>P??riode 6</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30%">Nombre de produits vendus</td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu1" name="result[nbre_produit]">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu2" name="result1[nbre_produit]">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu3" name="result2[nbre_produit]">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu4" name="result3[nbre_produit]">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu5" name="result4[nbre_produit]">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="produitVendu6" name="result5[nbre_produit]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Montant des ventes</td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu1"
                                                        name="result[montant_vente]"></td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu2"
                                                        name="result1[montant_vente]"></td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu3"
                                                        name="result2[montant_vente]"></td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu4"
                                                        name="result3[montant_vente]"></td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu5"
                                                        name="result4[montant_vente]"></td>
                                                <td><input type="number" class="form-control" id="montantProduitVendu6"
                                                        name="result5[montant_vente]"></td>
                                            </tr>

                                            <tr>
                                                <td>Montant des d??penses (charges)</td>
                                                <td><input type="number" class="form-control" id="montantDepense1"
                                                        name="result[montant_depenses]"></td>
                                                <td><input type="number" class="form-control" id="montantDepense2"
                                                        name="result1[montant_depenses]"></td>
                                                <td><input type="number" class="form-control" id="montantDepense3"
                                                        name="result2[montant_depenses]"></td>
                                                <td><input type="number" class="form-control" id="montantDepense4"
                                                        name="result3[montant_depenses]"></td>
                                                <td><input type="number" class="form-control" id="montantDepense5"
                                                        name="result4[montant_depenses]"></td>
                                                <td><input type="number" class="form-control" id="montantDepense6"
                                                        name="result5[montant_depenses]"></td>
                                            </tr>

                                            <tr>
                                                <td>B??n??fices</td>
                                                <td><input type="number" class="form-control" id="benefice1"
                                                        name="result[benefice]"></td>
                                                <td><input type="number" class="form-control" id="benefice2"
                                                        name="result1[benefice]"></td>
                                                <td><input type="number" class="form-control" id="benefice3"
                                                        name="result2[benefice]"></td>
                                                <td><input type="number" class="form-control" id="benefice4"
                                                        name="result3[benefice]"></td>
                                                <td><input type="number" class="form-control" id="benefice5"
                                                        name="result4[benefice]"></td>
                                                <td><input type="number" class="form-control" id="benefice6"
                                                        name="result5[benefice]"></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <br>
                            <table>
                                <div class="form-group row">
                                    <div class="col-md-6 ">
                                        <label>Quel est la composition de votre ??quipe de gestion ? </label>
                                        <textarea placeholder="" class="form-control" id="compositionEquipe" name="compoequipe_gestion"></textarea>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label>Quel est votre r??le dans le projet ?</label>
                                        <textarea placeholder="" class="form-control" id="monRole" name="role_in_projet"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4 ">
                                        <label>Etes-vous ?? plein temps dans le projet ? </label>
                                        <select class="form-control" id="pleinTemps" name="plein_tps_in_projet"
                                            onchange="displayPleinTemps(this.value)">
                                            <option value=""> </option>
                                            <option value="1">OUI</option>
                                            <option value="2">NON</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4" id="restTemps" style="display:none">
                                        <label>Que fa??tes-vous le reste du temps ?</label>
                                        <textarea class="form-control" name="resttemps" placeholder="Que fa??tes-vous le reste du temps ?"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label>
                                            D??crivez le plus pr??cis??ment possible votre exp??rience dans l???activit?? envisag??e
                                        </label>
                                        <textarea class="form-control" name="experienceprecise" placeholder=""></textarea>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>
                                            Comment pouvez-vous d??crire votre niveau de connaissance de l???activit??/
                                            m??tier ?
                                        </label>
                                        {!! Form::select('descriptionconnaissance_id', $descriconnaissanceactivite, null, ['class' => 'select2-region form-control','required' => true,]) !!}

                                        {{--<select class="form-control" id="descriptionConnaissance"
                                            name="descriptionConnaissance">
                                            <option value="1">Aucune connaissance</option>
                                            <option value="2">Connaissance de base (g??n??ralit??s) </option>
                                            <option value="3">
                                                Connaissance moyenne (ma??trise moyenne des concepts cl??s)
                                            </option>
                                            <option value="4">Connaissance approfondie (ma??trise globale du processus
                                                global)</option>
                                        </select>--}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Avez-vous pris part ?? une formation en entrepreneuriat ? </label>
                                        <select class="form-control" id="formationEntrepreunariat"
                                            name="formationentrepreunariat"
                                            onchange="displayFormationEntrepreunariat(this.value)">
                                            <option value=""> </option>
                                            <option value="1">OUI </option>
                                            <option value="2">NON </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" id="connaissanceAquise" style="display: none;">
                                        <label>Formation & Connaissance acquises </label>
                                        <textarea class="form-control" name="connaissanceaquise" placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Avez-vous pris part ?? une formation en gestion d???entreprises ? </label>
                                        <select class="form-control" id="formationGestion" name="formationgestion"
                                            onchange="displayFormationGestion(this.value)">
                                            <option value=""> </option>
                                            <option value="1">OUI </option>
                                            <option value="2">NON </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" id="connaissanceAquiseGestion" style="display: none;">
                                        <label>Formation & Connaissance acquises </label>
                                        <textarea class="form-control" name="connaissanceaquisegestion" placeholder="">
                                        </textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Comment pouvez-vous d??crire votre niveau de pratique en entrepreneuriat ? </label>
                                            {{--niveaupratiqueentrepreunariat_id--}}
                                        {!! Form::select('niveaupratiqueentrepreunariat_id', $niveaupratiqueentrepreneuriat, null, ['class' => 'select2-region form-control','required' => true,]) !!}

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Comment pouvez-vous d??crire votre niveau de pratique en gestion
                                            d???entreprise </label>
                                        {!! Form::select('niveaupratiqueentreprise_id', $niveaupratiqueentreprise, null, ['class' => 'select2-region form-control','required' => true,]) !!}
                                        {{--
                                        <select class="form-control" id="niveauPratiqueEntreprise"
                                            name="niveauPratiqueEntreprise">
                                            <option value=""> </option>
                                            <option value="1">Aucune connaissance </option>
                                            <option value="2">Connaissance de base (g??n??ralit??s) </option>
                                            <option value="3">Connaissance moyenne </option>
                                            <option value="4">Connaissance approfondie</option>
                                        </select>
                                        --}}
                                    </div>
                                </div>

                            </table>
                        </div>

                        <div class="tab">
                            <h5>BESOINS : </h5>
                            <table class="col-12">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Quels sont vos besoins actuels en formation pour mener ?? bien votre
                                            projet ?</label>
                                        <textarea placeholder="Besoin actuels en formation" id="besoinsActuelsFormation"
                                                  name="besoinsactuelsformation" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Quels sont vos besoins actuels en accompagnement technique ou en gestion
                                            pour mener ?? bien votre projet ?</label>
                                        <textarea placeholder="Besoins actuels en accompagnement" id="besoinsActuelsAccompagnement"
                                            name="besoinsactuelsaccompagnement" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Avez-vous un besoin de financement ? </label>
                                        <select class="form-control" id="formationGestion" name="besoinenfinancement"
                                            onchange="displayBesoinEnFinancement(this.value)">
                                            <option value=""> </option>
                                            <option value="1">OUI </option>
                                            <option value="2">NON </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" id="besoinEnFinancement" style="display: none;">
                                        <label>Quel est le montant en FCFA </label>
                                        <input type="number" class="form-control" name="montantfinancement"
                                            placeholder="Montant en FCFA">
                                    </div>

                                    <div class="col-md-4">
                                        <label>Quels sont les investissements ?? r??aliser avec le concours financier
                                            sollicit??</label>
                                        <textarea placeholder="" id="investissementConcour" name="investconcour" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 ">
                                        <label>Avez-vous d???autres besoins d???accompagnement (coaching, suivi,
                                            etc.)</label>
                                        <textarea placeholder="Autres b??soins" id="autreBesoinsAccompagnement" name="autrebesoinsaccompagnement"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </table>
                        </div>
                        <br>
                        <div class="row" style="float:right; ">
                            <div style="text-align:center;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <div>
                                <button type="button" id="prevBtn" class="btn btn-warning btn-rounded" onclick="nextPrev(-1)">Pr??c??dent</button>
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
            console.log(n);
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

            if (id == 6) {
                $('#precis_sitMatrimoniale').css("display", "block");
            } else {
                $('#precis_sitMatrimoniale').css("display", "none");
            }

        }

        function displayDebutProjet(id) {

            if (id == 1) {
                $('#dateDebutProjet').css("display", "block");
            } else {
                $('#dateDebutProjet').css("display", "none");
            }

        }

        function displayPleinTemps(id) {

            if (id == 1) {
                $('#restTemps').css("display", "block");
            } else {
                $('#restTemps').css("display", "none");
            }

        }

        function displayFormationEntrepreunariat(id) {

            if (id == 1) {
                $('#connaissanceAquise').css("display", "block");
            } else {
                $('#connaissanceAquise').css("display", "none");
            }

        }

        function displayFormationGestion(id) {

            if (id == 1) {
                $('#connaissanceAquiseGestion').css("display", "block");
            } else {
                $('#connaissanceAquiseGestion').css("display", "none");
            }

        }

        function displayBesoinEnFinancement(id) {

            if (id == 1) {
                $('#besoinEnFinancement').css("display", "block");
            } else {
                $('#besoinEnFinancement').css("display", "none");
            }

        }

          function getVilleByRegionId(id)
  {

    //alert(id);
    
    var url = "{{ url('ajax/villeByRegionId/show') }}/"+id;
     $.ajax(
     {
      type: "get",
      url: url,
      success: function(data)
      {
          $('select#commune_id').html(data.html_first);  
         // $('select#agent').html(data.html_two);       
      }
    }
);
  }

    </script>
@endsection

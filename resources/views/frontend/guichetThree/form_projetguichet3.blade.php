@extends('frontend.layout.main_form')
@section('content')
    <section>

        <!-- TOP SEARCH BOX -->
       <!--  <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Micro et Petite Entreprise (MPE) </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Soumettre un projet</a>
                    </li>
                </ul>
                <p>Micro et Petite Entreprise (MPE)</p>
            </div>
        </div>
    </section>

    <!--====== TOUR DETAILS ==========-->
    <section>

        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="tour_head">
                    <h2>Soumettre un projet</h2>
                </div>
               <div class="dir-rat-inn">
                    <form class="dir-rat-form col-md-12" action="{{ route('form.projetguichet3.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-4">
                            <label>Selectionnez la region:</label>
                            {!! Form::select('region_id', $region,null, ['class' => 'form-control', 'required' => true]) !!}
                        </div>
                        <div class=" col-md-4">
                             <label>Commune:</label>
                             {!! Form::select('commune_id', $commune,null, ['class' => 'form-control', 'required' => true]) !!}
                            </div>
                        <div class=" col-md-4">
                             <label>District:</label>
                             {!! Form::select('district_id', $district,null, ['class' => 'form-control', 'required' => true]) !!}
                        </div>
                    </div>

                        <div class="form-group row">
                            <div class="form-group col-md-4">
                            <label>
                                Dénomination (intitulé du projet) :
                            </label>
                           <input type="text" name="intituleprojet" class="form-control" id="intituleprojet" placeholder="Dénomination">
                        </div>
                       <div class="col-md-4">
                            <label>
                                Raison sociale :
                            </label>
                           <input type="text" name="raisonsociale" class="form-control" id="raisonsociale" placeholder="Raison sociale">
                        </div>
                       <div class="col-md-4">
                            <label>
                                Sigle :
                            </label>
                            <input type="text" name="sigle" class="form-control" id="sigle" placeholder="Sigle">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>
                                Type projet :
                            </label>

                             {!! Form::select('typeprojet_id', $typeprojet,null, ['class' => 'select2-typeprojet form-control', 'required' => true]) !!}
                        </div>
                        <div class="col-md-4">
                                <label>
                                    Secteur d'activités :
                                </label>

                                {!! Form::select('secteuractivite_id', $secteuractivite,null, ['class' => 'select2-secteuractivite form-control', 'required' => true]) !!}
                        </div>
                       <div class="col-md-4 ">
                            <label>
                                Agence régionale la plus proche :
                            </label>
                                {!! Form::select('divisionregionaleaej_id', $division,null, ['class' => 'select2-division form-control', 'required' => true]) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 ">
                            <label>
                                Forme juridique :
                            </label>
                            {!! Form::select('formejuridique_id', $formejuridique,null, ['class' => 'select2-formejuridique form-control', 'required' => true]) !!}
                        </div>
                       <div class="col-md-4">
                            <label>Description activité :</label>
                            <textarea placeholder="Description activité" name="descriptionactivite" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label>
                                Cout projet :
                            </label>
                           <input type="text" name="coutprojet" class="form-control" id="coutprojet" placeholder="Coût du projet"> 
                       </div>
                    </div>

                       <div class="form-group row">
                        <div class=" col-md-4">
                            <label>
                                Nombre d'emploi (s) créé (s) :
                            </label>
                           <input type="text" name="nombreemploi" class="form-control" id="nombreemploi" placeholder="Nombre d'emploi"> </div>
                        <div class=" col-md-4">
                        <label>
                            Etat du projet :
                        </label>
                         <select name="estnouvelleactivite" id="estnouvelleactivite" class="form-control">
                               <option value="1">Creation</option>
                               <option value="2">Développement commercial</option>
                           </select>
                        </div>
                        <div class="col-md-4">
                             <label>Plan d'affaire:</label>
                            <input class="form-control" type="file" id="planAffaire" name="planAffaire"> 
                        </div>
                    </div>

                        <div class="form-group col-md-8">
                             <button type="submit" class="btn btn-warning">Enregistrer</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

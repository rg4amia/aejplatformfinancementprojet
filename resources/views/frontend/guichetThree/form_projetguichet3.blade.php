@extends('frontend.layout.main')
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
                <h2><span>GUICHET 3 </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Soumettre un projet</a>
                    </li>
                </ul>
                <p>Slogan du guichet 3</p>
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
                        <div class="form-group col-md-4">
                            <label><h5>Selectionnez la region:</h5></label>
                            {!! Form::select('region_id', $region,null, ['class' => 'select2-region', 'required' => true]) !!}
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Commune:</h5></label>
                             {!! Form::select('commune_id', $commune,null, ['class' => 'select2-statudemandeur', 'required' => true]) !!}
                            </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>District:</h5></label>
                             {!! Form::select('district_id', $district,null, ['class' => 'select2-district', 'required' => true]) !!}
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Dénomination (intitulé du projet) :</h5>
                            </label>
                           <input type="text" name="intituleprojet" class="form-control" id="email12" placeholder="Dénomination">
                        </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Raison sociale :</h5>
                            </label>
                           <input type="text" name="raisonsociale" class="form-control" id="email12" placeholder="Raison sociale">
                        </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Sigle :</h5>
                            </label>
                            <input type="text" name="sigle" class="form-control" id="email12" placeholder="Sigle">
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Type projet :</h5>
                            </label>

                             {!! Form::select('typeprojet_id', $typeprojet,null, ['class' => 'select2-typeprojet', 'required' => true]) !!}
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                                <label>
                                    <h5>Secteur d'activités :</h5>
                                </label>

                                {!! Form::select('secteuractivite_id', $secteuractivite,null, ['class' => 'select2-secteuractivite', 'required' => true]) !!}
                        </div>
                       <div class="form-group col-md-4 pad-right-o">
                            <label>
                                <h5>Agence régionale la plus proche :</h5>
                            </label>
                                {!! Form::select('divisionregionaleaej_id', $division,null, ['class' => 'select2-division', 'required' => true]) !!}
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Forme juridique :</h5>
                            </label>
                            {!! Form::select('formejuridique_id', $formejuridique,null, ['class' => 'select2-formejuridique', 'required' => true]) !!}
                        </div>

                       <div class="form-group col-md-8 pad-left-o">
                            <label><h5>Description activité :</h5></label>
                            <textarea placeholder="Description activité" name="descriptionactivite"></textarea>
                        </div>

                        <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Cout projet :</h5>
                            </label>
                           <input type="text" name="coutprojet" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label>
                                <h5>Nombre d'emploi (s) créé (s) :</h5>
                            </label>
                           <input type="text" name="nombreemploi" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                        <div class="form-group col-md-4">
                        <label>
                            <h5>Etat du projet :</h5>
                        </label>
                         <select style="z-index: 1;" name="estnouvelleactivite">
                               <option value="1">Creation</option>
                               <option value="2">Développement commercial</option>
                           </select>
                        </div>

                        <div class="form-group col-md-4 pad-left-o">
                             <label>
                                <h5>Plan d'affaire:</h5>
                            </label>
                            <input name="planaffaire" type="file" class="" id="email12">
                        </div>
                        </div>
                       <br/>
                        <div class="form-group col-md-8 pad-left-o">
                            <input type="submit" value="Enregistrer" class="link-btn">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

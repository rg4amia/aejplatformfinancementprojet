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
                    <form class="dir-rat-form col-md-12">
                        <div>
                        <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Selectionnez la region:</h5></label>
                            <input type="text" class="form-control" id="email11" placeholder="Intitulé du projet"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Commune:</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>District:</h5></label>
                            <input type="text" class="form-control" id="email13" > </div>

                        <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Dénomination (intitulé du projet) :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Raison sociale :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Sigle :</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                        </div>

                         <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Type projet :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Type de programme :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Secteur d'activités :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                 

                        <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Forme juridique :</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Agence régionale la plus proche :</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>

                       <div class="form-group col-md-12 pad-left-o">
                            <label><h5>Description activité :</h5></label>
                            <textarea placeholder="Description du mentor"></textarea>
                        </div>

                        <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Cout projet :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Compte bancaire :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Régistre de commerce :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>

     <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Compte contribuable :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Nombre d'emploi (s) créé (s) :</h5></label>
                           <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                       <div class="form-group col-md-4 pad-left-o">
                            <label><h5></h5></label>
                           <input type="hidden" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>


                        <div class="form-group col-md-5">
                        <label><h5>Etat du projet :</h5></label>
                        <br>
                        <input type="radio" class="form-control" id="contactChoice1" name="contact" value="email">
                        <label for="contactChoice1">Création</label>
                        <input type="radio" class="form-control" id="contactChoice2" name="contact" value="telephone">
                        <label for="contactChoice2">Développement</label>
                                            
                        </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Plan d'affaire:</h5></label>
                            <input type="file" class="" id="email12"> 
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
 
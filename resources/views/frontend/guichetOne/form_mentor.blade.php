@extends('frontend.layout.main')
@section('content')
    <section>
        
       
    </section>
    <!--END HEADER SECTION-->
        
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>GUICHET 1 </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Enrégistrr un mentor</a>
                    </li>
                </ul>
                <p>slogan du guichet 1</p>
            </div>
        </div>
    </section>

    <!--====== TOUR DETAILS ==========-->
    <section>

        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">

                 <div class="tour_head">
                        <h2>Enregistrer un Mentor</h2> 
                    </div>

               <div class="dir-rat-inn">
                    <form class="dir-rat-form">
                        <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Nom:</h5></label>
                            <input type="text" class="form-control" id="email11" placeholder="Nom"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Prenoms:</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Prenoms"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Date de naissance:</h5></label>
                            <input type="date" class="form-control" id="email13" > </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Contact 1:</h5></label>
                            <input type="number" class="form-control" id="email12" placeholder="Contact 1"> </div>
                         <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Contact 2:</h5></label>
                            <input type="number" class="form-control" id="email12" placeholder="Contact 2"> </div>
                         <div class="form-group col-md-4 pad-left-o">
                             <label><h5>E-mail:</h5></label>
                            <input type="email" class="form-control" id="email12" placeholder="E-mail"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Region de résidence:</h5></label>
                            <input type="text" class="form-control" id="email14" placeholder="Region de residence"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Ville de résidence:</h5></label>
                            <input type="text" class="form-control" id="email14" placeholder="Ville de residence"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Quartier de résidence:</h5></label>
                            <input type="text" class="form-control" id="email14" placeholder="Quatier de residence"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Secteur d'activité:</h5></label>
                            <input type="text" class="form-control" id="email14" placeholder="Secteur d'activité"> </div>
                        <div class="form-group col-md-8 pad-left-o">
                            <label><h5>Description du mentor:</h5></label>
                            <textarea placeholder="Description du mentor"></textarea>
                        </div>
                        <div class="form-group col-md-8 pad-left-o">
                            <input type="submit" value="Enregistrer" class="link-btn"> 
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection
 
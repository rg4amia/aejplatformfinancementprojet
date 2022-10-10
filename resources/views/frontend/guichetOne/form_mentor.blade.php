@extends('frontend.layout.main_form')
@section('content')
  
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Mentorat solidaire (Business Angel) </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Enrégistrer un mentor</a>
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
                        <h2>Enregistrer un Mentor</h2>
                    </div>

               <div class="dir-rat-inn">
                    <form >
                        <div class="form-group">
                        <div class="col-md-4">
                            <label>Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"> </div>
                        <div class="col-md-4">
                             <label>Prenoms:</label>
                            <input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Prenoms"> </div>
                        <div class="col-md-4">
                             <label>Date de naissance:</label>
                            <input type="date" class="form-control" id="datedenaissance" name="datedenaissance" > </div>
                        </div>

                       <div class="form-group">
                        <div class="col-md-4">
                             <label><h5>Contact 1:</h5></label>
                            <input type="number" class="form-control" id="contact1" name="contact1" placeholder="Contact 1"> </div>
                         <div class="col-md-4">
                             <label><h5>Contact 2:</h5></label>
                            <input type="number" class="form-control" id="contact2" name="contact2" placeholder="Contact 2"> </div>
                         <div class="col-md-4">
                             <label><h5>E-mail:</h5></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"> </div>
                        </div>

                    <div class="form-group">
                        <div class="col-md-4">
                             <label><h5>Region de résidence:</h5></label>
                            <input type="text" class="form-control" id="regionResidence" name="regionResidence" placeholder="Region de residence"> </div>
                        <div class="col-md-4">
                             <label><h5>Ville de résidence:</h5></label>
                            <input type="text" class="form-control" id="villeResidence" name="villeResidence" placeholder="Ville de residence"> </div>
                        <div class="col-md-4">
                             <label><h5>Quartier de résidence:</h5></label>
                            <input type="text" class="form-control" id="quartierResidence" name="quartierResidence" placeholder="Quatier de residence"> </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-4">
                             <label><h5>Secteur d'activité:</h5></label>
                            <input type="text" class="form-control" id="secteurActivite" name="secteurActivite" placeholder="Secteur d'activité"> </div>
                        <div class="col-md-8">
                            <label><h5>Description du mentor:</h5></label>
                            <textarea class="form-control" placeholder="Description du mentor" id="descriptionMentor" name="descriptionMentor"></textarea>
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

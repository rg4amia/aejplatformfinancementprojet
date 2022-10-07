@extends('frontend.layout.main')
@section('content')
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>GUICHET 1 </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="{{ route('mentor.form') }}" class="bread-acti">Enrégistrer un mentor</a>
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
                        <h2>Soumettre un projet</h2>
                    </div>

               <div class="dir-rat-inn">
                    <form class="dir-rat-form col-md-8">
                        <div>

                            <div class="form-group col-md-4 pad-left-o">
                            <label><h5>Intitulé du projet:</h5></label>
                            <input type="text" class="form-control" id="email11" placeholder="Intitulé du projet"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Secteur d'activité:</h5></label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label><h5>Coût du projet:</h5></label>
                            <input type="text" class="form-control" id="email13" > </div>
                        <div class="form-group col-md-8 pad-left-o">
                            <label><h5>Description du projet:</h5></label>
                            <textarea placeholder="Description du mentor"></textarea>
                        </div>
                         <br/>
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

@extends('frontend.layout.main')
@section('style')
<style type="text/css">
    /* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #D98719;
  color: #444;
  cursor: pointer;
  padding: 18px;
  margin: 5px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  border-radius: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #E2AF18;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
</style>
@endsection
@section('content')
    <section>


    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Conditions d'éligibilités </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Conditions d'éligibilités</a>
                    </li>
                </ul>
                <p>Conditions d'éligibilités</p>
            </div>
        </div>
    </section>
    
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>Conditions d'éligibilités</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    
                    <div class="">
                        <button class="accordion">Mentorat solidaire (Business Angel)</button>
                        <div class="panel tour_head1 l-info-pack-days days">
                        <h2>Mentorat solidaire (Business Angel)</h2>
                        <ul>
                           
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) primo entrepreneurs ou déjà en activité.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 5 000 000 F CFA maximum</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Appui en subvention du mentor, en dette ou prise de participation minoritaire.</p>
                            </li>
                        </ul>
                       
                    </div>

                         <br>
                        <button class="accordion">Activités Génératrices de Revenus (AGR) </button>
                        <div class="panel tour_head1 l-info-pack-days days">
                        <h2>Activités Génératrices de Revenus (AGR)</h2>
                        <ul>
                            
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- AGR Classique et AVEC : Jeunes (18 à 40 ans) primo entrepreneurs ou déjà en activité .</p>
                                <p>- AGR Plus : Jeunes (18 à 40 ans) bénéficiaire de l’opération Agir ayant correctement remboursés les prêts.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- AGR Classique : 100 000 F CFA à 1 000 000 F CFA</p>
                                <p>- AVEC: 100 000 F CFA à 300 000 F CFA</p>
                                <p>- AGR Plus : 50 000 F CFA à 300 000 F CFA avec possibilité de revolving quasi illimité</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : Crédit; Durée: 3 à 24 mois maximum.</p>
                                <p>- Taux d’intérêt: à partir de 8% TAEG/an.</p>
                                <p>- Apport personnel: 10% minimum.</p>
                            </li>
                        </ul>
                       
                    </div>
                       
                       <br>
                        <button class="accordion">Micro et Petites Entreprises (MPE) </button>
                        <div class="panel tour_head1 l-info-pack-days days">
                        <h2>Micro et Petites Entreprises (MPE)</h2>
                        <ul>
                           
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) primo entrepreneurs ou déjà en activité</p>
                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 1 000 001 F CFA à 5 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type :  Crédit</p>
                                <p>- Duréede remboursement : 36 mois maximum</p>
                                <p>- Taux d’intérêt: à partir de 8% TAEG/an</p>
                                <p>- Apport personnel: 10% minimum</p>
                            </li>
                        </ul>
                       
                        
                    </div>

                         <br>
                        <button class="accordion">Moyennes Entreprises et Projets Structurants (MEPS)</button>
                        <div class="panel tour_head1 l-info-pack-days days">
                        <h2>Moyennes Entreprises et Projets Structurants (MEPS)</h2>
                         <ul>
                           
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) déjà en activité (2 années d’existence minimum ).</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 5 000 001 F CFA à 25 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : Crédit; Duréede remboursement : 36 mois maximum.</p>
                                <p>- Taux d’intérêt: à partir de 8% TAEG/an.</p>
                                <p>- Apport personnel: 10% minimum.</p>
                            </li>
                        </ul>
                        
                    </div>
                        
                        <br>
                        <button class="accordion">Capital Investissement (CI)</button>
                        <div class="panel tour_head1 l-info-pack-days days">
                        <h2>Capital Investissement (CI)</h2>
                        <ul>
                           
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) déjà en activité (3 années d’existence minimum ).</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 25 000 000 F CFA à 100 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : capital</p>
                                <p>- Prise de participation minoritaire</p>
                                <p>- Maturité de 60 mois en moyenne</p>
                                <p>- Conditions de sortie de capital négociées</p>
                            </li>
                        </ul>
                       
                    </div>
                    </div>
                </div>
                <div class="col-md-3 tour_r">


                    @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
<script type="text/javascript">
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endsection

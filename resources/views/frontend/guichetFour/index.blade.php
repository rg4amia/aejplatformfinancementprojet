@extends('frontend.layout.main')
@section('style')
<style type="text/css">
    /* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #F8BA05;
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
                <h2><span>Moyenne Entreprise et Projets Structurants </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Moyenne Entreprise et Projets Structurants</a>
                    </li>
                </ul>
                <p>Moyenne Entreprise et Projets Structurants</p>
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
                        <h2>Moyenne Entreprise et Projets Structurants</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->

                    <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Composantes</h4>
                                <p>- accompagnement des projets de d??veloppement d???entreprises formelles.</p>
                                <p>- acc??s ?? la formation, au financement et au dispositif de suivi-encadrement.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 ?? 40 ans) d??j?? en activit?? (2 ann??es d???existence minimum ).</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 5 000 001 F CFA ?? 25 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : Cr??dit; Dur??ede remboursement : 36 mois maximum.</p>
                                <p>- Taux d???int??r??t: ?? partir de 8% TAEG/an.</p>
                                <p>- Apport personnel: 10% minimum.</p>
                            </li>
                        </ul>
                        <br>
                        
                    </div>
                    <br>
                       <!--  <a href="{{route('form.projetguichet4co')}}"><button class="btn btn-info"> Soumettre un projet</button></a> -->
                        <a href="{{url('https://agenceemploijeunes.ci/site/demandeur_login')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
                    
                    
                    <!-- <button class="accordion">CREDIT ORDINAIRE</button>
                        <div class="panel">

                         <h3>Credit ordinaire</h3>
                         <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Composantes</h4>
                                <p>- accompagnement des projets de d??veloppement d???entreprises formelles.</p>
                                <p>- acc??s ?? la formation, au financement et au dispositif de suivi-encadrement.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 ?? 40 ans) d??j?? en activit?? (2 ann??es d???existence minimum ).</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 5 000 001 F CFA ?? 25 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : Cr??dit; Dur??ede remboursement : 36 mois maximum.</p>
                                <p>- Taux d???int??r??t: ?? partir de 8% TAEG/an.</p>
                                <p>- Apport personnel: 10% minimum.</p>
                            </li>
                        </ul>
                        <br>
                        
                    </div>
                        
                        <br>
                        <a href="{{route('form.projetguichet4co')}}"><button class="btn btn-info"> Soumettre un projet</button></a>

                        </div>
                         <br>
                        <button class="accordion">AUTRE TYPE DE CREDIT</button>
                        <div class="panel">
                          <h3>Autre type de credit</h3>
                        
                        <br>
                        <a href="{{route('form.projetguichet4ac')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
                        </div> -->
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

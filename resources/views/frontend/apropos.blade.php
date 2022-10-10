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
                <h2><span>à propos </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">A propos</a>
                    </li>
                </ul>
                <p>A propos</p>
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
                        <h2>A propos</h2> 
                    </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1 l-info-pack-days days">
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Qu’est ce que la plateforme de financement ? </h4>
                                <p>- Dispositif opérationnel de promotion de l’entrepreneuriat jeunes ;</p>

                                <p>- Intégrant à la fois formation (entrepreneuriat, gestion d’entreprise, etc.), accès au financement (y compris le remboursement) et suivi-encadrement ;</p>

                                  <p>- Faisant intervenir et interagir les acteurs clés de l’écosystème entrepreneurial (institutions de financement, structures de formation et d’encadrement) pour un accompagnement optimal des jeunes;</p>

                                  <p>- Dont la finalité est de maximiser les chances de réussite des projets financés pour une insertion durable des jeunes.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Pourquoi la reforme du dispositif ?</h4>
                                <p>- Adapter l’offre de services aux besoins de financement multiples et variés des jeunes en tenant compte de la maturité de leur projet ou entreprise ;</p>

                                <p>- Offrir aux jeunes un éventail plus large de produits de financements de leur idée/entreprise à des conditions plus avantageuses (taux d’intérêt, durée, différé, frais bancaires, …)</p>
                                <p>- Améliorer significativement les délais de prise en charge des projets ;</p>
                                <p>- Sécuriser les ressources dédiées au financement des projets  jeunes à travers un meilleur recouvrement des prêts octroyés ;</p>
                                <p>- Garantir la pérennité du dispositif</p>
                            </li>
                            
                        </ul>
                        
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

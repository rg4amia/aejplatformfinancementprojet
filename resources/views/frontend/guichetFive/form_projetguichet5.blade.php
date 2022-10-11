@extends('frontend.layout.main_form')
@section('content')
    <section>
        
      
    </section>
    <!--END HEADER SECTION-->
        
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Capital Investissement (CI)</span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Soumettre un projet</a>
                    </li>
                </ul>
                <p>Capital Investissement (CI)</p>
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
                    <form >
                      
                            <div class="form-group row">
                                <div class="col-md-4">
                                <label>Région:</label>
                                        <select class="select2-region form-control" required id="region_id" name="region_id" onchange="getVilleByRegionId(this.value)">
                                            <option value="">Selectionnez région</option>
                                            @foreach($regions as $region)
                                            <option value="{{$region->id}}">{{$region->nom}}</option>
                                            @endforeach
                                        </select>
                            </div>
                        <div class="col-md-4">
                             <label>Ville / Commune:</label>
                                <select class="select2-region form-control" required id="commune_id" name="commune_id">
                                    <option value="">Selectionnez Ville</option>
                                   
                                </select>
                        </div>
                            <div class="col-md-4">
                                 <label>District:</label>
                                <select  class="form-control" required="" id="district" name="district">
                                <option selected="" value="">-- Veuillez Sélectionnez --</option>
                                        <option value="11">BAS-SASSANDRA</option>
                                        <option value="5">DENGUELE</option>
                                        <option value="1">DISTRICT AUTONOME ABIDJAN</option>
                                        <option value="2">DISTRICT AUTONOME YAMOUSSOUKRO</option>
                                        <option value="6">GÔH-DJIBOUA</option>
                                        <option value="3">LACS</option>
                                        <option value="7">LAGUNES</option>
                                        <option value="8">MONTAGNES</option>
                                        <option value="9">SASSANDRA-MARAHOUE</option>
                                        <option value="10">SAVANES</option>
                                        <option value="4">SUD-COMOE</option>
                                        <option value="12">VALLEE DU BANDAMA</option>
                                        <option value="13">WOROBA</option>
                                        <option value="14">ZANZAN</option>
                                </select>
                                </div>
                            </div>

                        <div class="form-group row">
                        <div class="col-md-4">
                            <label>Dénomination (intitulé du projet) :</label>
                           <input type="text" class="form-control" id="denomination" name="denomination" placeholder="Dénomination"> </div>
                       <div class="col-md-4">
                            <label>Raison sociale :</label>
                           <input type="text" class="form-control" id="raisonsociale" name="raisonsociale" placeholder="Raison sociale"> </div>
                       <div class="col-md-4">
                            <label>Sigle :</label>
                            <input type="text" class="form-control" id="sigle" name="sigle" placeholder="Sigle"> </div>
                        </div>
                    
                        <div class="form-group row">
                         <div class="col-md-4">
                            <label>Type projet :</label>
                          <select  class="form-control" required="" id="typeProjet" name="typeProjet">
                            <option selected="" value=""> -- Veuillez Sélectionnez  -- </option>
                            <option value="1">PROJET STRUCTURANTS</option>
                            <option value="2">PROJETS MICRO ET PETITES ENTREPRISES(MPE)</option>
                            <option value="3">PROJETS MOYENNE ENTREPRISE (ME)</option>
                    </select></div>
                       <div class="col-md-4">
                            <label>Secteur d'activités :</label>
                           <select class="form-control" required="" id="secteurActivite" name="secteurActivite">
<option selected="" value="">-- Veuillez Sélectionnez --</option>
                        <option value="1">ADMINISTRATION</option>
                        <option value="22">Agriculture</option>
                        <option value="2">Agriculture/Elevage/Peche</option>
                        <option value="24">Agroalimentaire</option>
                        <option value="25">Agropastoral</option>
                        <option value="30">Architecture-Design</option>
                        <option value="31">Art-Culture-Loisirs</option>
                        <option value="33">Audiovisuel-Multimedia</option>
                        <option value="34">Automobile</option>
                        <option value="46">Autre</option>
                        <option value="19">Autres a Preciser</option>
                        <option value="32">Banque-Assurance</option>
                        <option value="35">Biens de consommation</option>
                        <option value="3">BTP (Batment Travaux Publics)</option>
                        <option value="47">BTP option: Hydraulique</option>
                        <option value="36">BTP-Construction</option>
                        <option value="4">Commerce</option>
                        <option value="26">Commerce</option>
                        <option value="5">Communication/Telecommunication</option>
                        <option value="20">Divers</option>
                        <option value="37">Edition Imprimerie</option>
                        <option value="6">Education</option>
                        <option value="23">Elevage</option>
                        <option value="38">Energie-Eau</option>
                        <option value="39">Enseignement-Formation</option>
                        <option value="7">Finance/Economie/Statist.Assur./Banque</option>
                        <option value="40">Grande Distribution</option>
                        <option value="41">Hotellerie-Restauration</option>
                        <option value="8">Hotellerie/Restauration</option>
                        <option value="27">Industrie</option>
                        <option value="11">Industrie /Materiaux Souples et Associes/Mines</option>
                        <option value="13">Industrie du Bois</option>
                        <option value="9">Industrie/Chimie/Agro./Energie</option>
                        <option value="10">Industrie/Electricite/Electronique/Electromecanique/Maintenance</option>
                        <option value="12">Industrie/Mecanique/Metallurgique</option>
                        <option value="14">Informatique</option>
                        <option value="15">Loisirs/Spectacles/Metiers d'Art</option>
                        <option value="16">Medical</option>
                        <option value="29">NTIC</option>
                        <option value="21">Sans secteur</option>
                        <option value="42">Sante</option>
                        <option value="17">Services</option>
                        <option value="28">Services</option>
                        <option value="43">Sport</option>
                        <option value="44">Tourisme</option>
                        <option value="45">Transport</option>
                        <option value="18">Transport/Approvisionnement/Logistique</option>
                </select>
                       </div>
                       <div class="col-md-4">
                            <label>Agence régionale la plus proche :</label>
                               <select class="form-control" required="" id="agenceRegionale" name="agenceRegionale">
                                <option selected="" value="">-- Veuillez Sélectionnez  -- </option>
                                <option value="7">ABENGOUROU</option>
                                <option value="1">ABOBO</option>
                                <option value="18">ABOISSO</option>
                                <option value="2">ADJAME</option>
                                <option value="20">BEOUMI</option>
                                <option value="9">BOUAKE</option>
                                <option value="8">DALOA</option>
                                <option value="21">DAOUKRO</option>
                                <option value="17">DG - PLATEAU</option>
                                <option value="6">DIMBOKRO</option>
                                <option value="10">GAGNOA</option>
                                <option value="13">GUIGLO</option>
                                <option value="16">KORHOGO</option>
                                <option value="19">MAN</option>
                                <option value="22">ODIENNE</option>
                                <option value="24">PRESTIGE</option>
                                <option value="11">SAN-PEDRO</option>
                                <option value="23">SOUBRE</option>
                                <option value="3">TREICHVILLE</option>
                                <option value="12">YAMOUSSOUKRO</option>
                                <option value="4">YOPOUGON</option>
                            </select>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Forme juridique :</label>
                            <input type="text" class="form-control" id="formeJuridique" name="formeJuridique" placeholder="Forme juridique"> </div>
                       <div class="col-md-4">
                            <label>Description activité :</label>
                            <textarea placeholder="Description activité" id="descriptionActivite" name="descriptionActivite" ></textarea>
                        </div>

                        <div class="col-md-4">
                            <label>Cout projet :</label>
                           <input type="text" class="form-control" id="coutprojet" name="coutprojet" placeholder="Cout projet"> </div>
                    </div>
                    <div class="form-group row">
                       <div class="col-md-4">
                            <label>Nombre d'emploi (s) créé (s) :</label>
                           <input type="text" class="form-control" id="nbrEmploi" name="nbrEmploi" placeholder="Nombre d'emploi (s)"> </div>
                        <div class="col-md-4">
                        <label>Etat du projet :</label>
                         <select class="form-control" id="etatProjet" name="etatProjet">
                            <option value=""></option>
                               <option value="1">Creation</option>
                               <option value="2">Développement commercial</option>
                           </select>   
                        </div>
                        <div class="col-md-4">
                             <label>Plan d'affaire:</label>
                            <input class="form-control" type="file" id="planAffaire" name="planAffaire"> 
                        </div>
                     </div>

                        </div>
                    
                       <br/>
                        <div class="form-group col-md-8">
                            <button type="submit" class="btn btn-warning">Enregistrer</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection

@section('js')
    <script type="text/javascript">

         $(document).ready(function() {
            $('.select2-region').select2();
            $('.select2-commune').select2();
            $('.select2-district').select2();
            $('.select2-typeprojet').select2();
            $('.select2-secteuractivite').select2();
            $('.select2-division').select2();
            $('.select2-formejuridique').select2();
        });
    

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
 
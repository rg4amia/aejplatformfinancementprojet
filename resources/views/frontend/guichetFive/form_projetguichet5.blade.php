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
                            <label>Selectionnez la region:</label>
                           <select class="form-control" required="" id="region" name="region">
                                <option selected="" value=""> -- Veuillez Sélectionnez  -- </option>
                                <option value="32">ABIDJAN</option>
                                <option value="11">AGNEBY-TIASSA</option>
                                <option value="28">BAFING</option>
                                <option value="21">BAGOUE</option>
                                <option value="3">BELIER</option>
                                <option value="27">BERE</option>
                                <option value="30">BOUNKANI</option>
                                <option value="15">CAVALLY</option>
                                <option value="7">FOLON</option>
                                <option value="26">GBEKE</option>
                                <option value="24">GBOKLE</option>
                                <option value="9">GOH</option>
                                <option value="31">GONTOUGO</option>
                                <option value="13">GRANDS PONTS</option>
                                <option value="16">GUEMON</option>
                                <option value="25">HAMBOL</option>
                                <option value="17">HAUT-SASSANDRA</option>
                                <option value="2">IFFOU</option>
                                <option value="5">INDENIE-DJUABLIN</option>
                                <option value="8">KABADOUGOU</option>
                                <option value="12">LA ME</option>
                                <option value="10">LOH-DJIBOUA</option>
                                <option value="18">MARAHOUE</option>
                                <option value="4">MORONOU</option>
                                <option value="1">N'ZI</option>
                                <option value="22">NAWA</option>
                                <option value="19">PORO</option>
                                <option value="23">SAN-PEDRO</option>
                                <option value="6">SUD-COMOE</option>
                                <option value="20">TCHOLOGO</option>
                                <option value="14">TONKPI</option>
                                <option value="29">WORODOUGOU</option>
                                <option value="33">YAMOUSSOUKRO</option>
                                </select> 
                            </div>
                        <div class="col-md-4">
                             <label>Commune:</label>
                            <select class="form-control" required="" id="commune" name="commune">
                             <option selected="" value=""> -- Veuillez Sélectionnez  -- </option>
                            <option value="1">ABENGOUROU</option>
                            <option value="2">ABIGUI</option>
                            <option value="3">ABOBO</option>
                            <option value="4">ABOISSO</option>
                            <option value="5">ABOISSO-COMOE</option>
                            <option value="6">ABONGOUA</option>
                            <option value="7">ABOUDE</option>
                            <option value="8">ADAOU</option>
                            <option value="9">ADIAKE</option>
                            <option value="10">ADJAME</option>
                            <option value="11">ADJOUAN</option>
                            <option value="12">ADZOPE</option>
                            <option value="507">ZAIBO</option>
                            <option value="508">ZANZRA</option>
                            <option value="509">ZARANOU</option>
                            <option value="510">ZEAGLO</option>
                            <option value="511">ZEGO</option>
                            <option value="512">ZEO</option>
                            <option value="513">ZIKISSO</option>
                            <option value="514">ZIOGOUINE</option>
                            <option value="515">ZONNEU</option>
                            <option value="516">ZOU</option>
                            <option value="517">ZOUAN-HOUNIEN</option>
                            <option value="518">ZOUKOUGBEU</option>
                            <option value="519">ZUENOULA</option>
                    </select> </div>
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
 
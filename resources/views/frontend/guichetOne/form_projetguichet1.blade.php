@extends('frontend.layout.main_form')
@section('css')

<style type="text/css">
    /* Style the form */
#regForm {
  background-color: #ffffff;
 /* margin: 100px auto;
  padding: 40px;*/
  width: 100%;
  min-width: 300px;
}

/* Style the input fields */
/*input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}*/

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

</style>

@endsection

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
                <p>Business Angel</p>
            </div>
        </div>
    </section>

    <!--====== TOUR DETAILS ==========-->
    <section>

        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">

                 <div class="tour_head">
                        <h2>Formulaire de soumission</h2>

                    </div>

               <div class="dir-rat-inn">
                <form id="regForm" action="" class="" >

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <h5>I. INFORMATIONS SUR LE CANDIDAT :</h5>
                       <table>

                        <div class="form-group col-md-4">
                            <label>Nom:</label>
                            <input type="text" class="form-control" id="email11" placeholder="Intitulé du projet"> </div>
                        <div class="form-group col-md-4 ">
                             <label>Prenoms:</label>
                            <input type="text" class="form-control" id="email12" placeholder="Secteur d'activité"> </div>
                        <div class="form-group col-md-4 ">
                             <label>Date de naissance:</label>
                            <input type="date" class="form-control" id="email13" > </div>

                         <div class="form-group col-md-4">
                            <label>Situation matrimoniale :</label>
                           <select required="" class="form-control">
                                <option selected="" value=""> -- Situation matrimoniale  -- </option>
                                <option value="32">Marié (e) </option>
                                <option value="11">Célibataire </option>
                                <option value="32">Divorcé (e)</option>
                                <option value="11">Veuf (e)</option>
                                <option value="11">Concubinage </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sexe:</label>
                           <select required="" class="form-control">
                                <option selected="" value=""> -- Sexe -- </option>
                                <option value="32">Masculin</option>
                                <option value="11">Féminin</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Niveau d’étude :</label>
                           <select required="" class="form-control">
                                <option selected="" value=""> -- Niveau d’étude  -- </option>
                                <option value="32">Primaire</option>
                                <option value="11">Secondaire</option>
                                <option value="32">Supérieur</option>
                                <option value="11">Autodidacte</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                             <label>Dernier Diplôme:</label>
                            <input type="text" class="form-control" id="email13" > </div>
                        <div class="form-group col-md-4">
                             <label>Nombre d’enfants :</label>
                            <input type="number" class="form-control" id="email13" > </div>
                            <div class="form-group col-md-4">
                             <label>Nombre de personnes à charge :</label>
                            <input type="number" class="form-control" id="email13" > </div>

                            <div class="form-group col-md-4">
                             <label>Ville / Commune:</label>
                            <input type="text" class="form-control" id="email13" > </div>
                            <div class="form-group col-md-4 ">
                             <label>Région:</label>
                            <input type="text" class="form-control" id="email13" > </div>
                            <div class="form-group col-md-4 pad-left-o">
                             <label>Adresse postale :</label>
                            <input type="text" class="form-control" id="email13" > </div>

                            <div class="form-group col-md-4">
                             <label>Adresse géographique précise:</label>
                            <input type="text" class="form-control" id="email13" > </div>
                            <div class="form-group col-md-4">
                             <label>Tél fixe :</label>
                            <input type="text" class="form-control" id="email13" > </div>
                            <div class="form-group col-md-4">
                             <label>Cellulaire :</label>
                            <input type="text" class="form-control" id="email13" > </div>

                            <div class="form-group col-md-4">
                             <label>Email :</label>
                            <input type="text" class="form-control" id="" ></div>
                            <br>
                       </table>

                    </div>

                    <div class="tab">
                        <h5>II. EDUCATION ET EXPERIENCE PROFESSIONNELLE :</h5>
                         <h5>2.1. Veuillez indiquer vos diplômes et/ou certificats en commençant par les plus récents</h5>
                        <table>

                            <div class="form-group col-md-4">
                            <label>Titre du diplôme/ certificat:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Nom de l’établissement:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Période :</label>
                            <input type="date" class="form-control" id="" > </div>

                            <div class="form-group col-md-4">
                            <label>Titre du diplôme/ certificat:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label>Nom de l’établissement:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4 pad-left-o">
                             <label>Période :</label>
                            <input type="date" class="form-control" id="" > </div>

                            <div class="form-group col-md-4">
                            <label>Titre du diplôme/ certificat:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Nom de l’établissement:</label>
                            <input type="text" class="form-control" id="" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Période :</label>
                            <input type="date" class="form-control" id="" > </div>

                        </table>
                        <h5>2.2. Veuillez rappeler votre expérience professionnelle </h5>
                        <table>

                            <div class="form-group col-md-4">
                            <label>Année :</label>
                            <input type="number" class="form-control" id="email11" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Entreprise :</label>
                            <input type="text" class="form-control" id="email12" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Poste ou fonction  :</label>
                            <input type="text" class="form-control" id="email13" > </div>

                            <div class="form-group col-md-4">
                            <label>Année :</label>
                            <input type="number" class="form-control" id="email11" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Entreprise :</label>
                            <input type="text" class="form-control" id="email12" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Poste ou fonction  :</label>
                            <input type="text" class="form-control" id="email13" > </div>

                            <div class="form-group col-md-4">
                            <label>Année :</label>
                            <input type="number" class="form-control" id="email11" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Entreprise :</label>
                            <input type="text" class="form-control" id="email12" placeholder=""> </div>
                        <div class="form-group col-md-4">
                             <label>Poste ou fonction  :</label>
                            <input type="text" class="form-control" id="email13" > </div>

                        </table>

                    </div>

                    <div class="tab">
                         <h5>III. PRESENTATION DE L’IDEE DE PROJET ET/OU L’ENTREPRISE :</h5>
                        <h6>3.1.    Quelle est la dénomination de votre projet ?   </h6>

                        <table>

                        <div class="form-group col-md-6">
                            <label>3.2. Avez-vous débuté le projet ?</label>
                           <select required="" class="form-control">
                                <option value="32">OUI </option>
                                <option value="11">NON </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>3.3. Comment décrirez-vous le niveau de maturation de votre projet ?</label>
                           <select required="" class="form-control">
                                <option value="32">Idée: Vous avez le business model mais n'avez pas encore développé la solution technique  </option>
                                <option value="11">Prototype: La solution est déjà développée et vous êtes en phase de test  </option>
                                <option value="32">Revenus: Votre produit a déjà des utilisateurs qui le paient et vous êtes activement en train de vendre/distribuer</option>
                                <option value="11">Scaling: Votre équipe cherche à passer à échelle dans d'autres villes/pays/ d'autres verticales </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                             <label>3.4.    Pouvez-vous décrire votre projet ?</label>
                            <textarea placeholder="" class="form-control"></textarea>
                             </div>

                        <div class="form-group col-md-6">
                             <label>3.5. A quel besoin économique votre projet ou idée répond-il ?</label>
                            <textarea placeholder="" class="form-control"></textarea> </div>
                        <p>

                            <div class="form-group col-md-6">
                            <label>3.6. Quel est votre business model (modèle économique ou modèle d’affaires) ?</label>
                            <textarea placeholder="" class="form-control"></textarea> </div>
                        <div class="form-group col-md-6">
                             <label>3.7. Quel est le marché cible ? quelle est votre stratégie marketing ?</label>
                            <textarea placeholder="" class="form-control"></textarea> </div>
                            
                        </p>

                        <p>
                            <div class="form-group col-md-6">
                             <label>3.8. Si déjà en activité, combien avez-vous d’utilisateurs ou clients ?  combien d’utilisateurs paient l’usage du produit ou du service ?</label>
                            <textarea placeholder="" class="form-control"></textarea> 
                        </div>
                            
                        </p>
                        

                        </table>

                        3.9.    Si déjà en activité, quels sont vos résultats les plus récents en termes de vente de vos produits sur les 6 derniers mois ?

                         <table >
                            <thead>
                                <th>Rubriques</th>
                                <th>Période 1</th>
                                <th>Période 2</th>
                                <th>Période 3</th>
                                <th>Période 4</th>
                                <th>Période 5</th>
                                <th>Période 6</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30%">Nombre de produits vendus</td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                </tr>

                                <tr>
                                    <td>Montant des ventes</td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                </tr>

                                <tr>
                                    <td>Montant des dépenses (charges)</td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                </tr>

                                <tr>
                                    <td>Bénéfices</td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                    <td><input type="text" class="form-control" id="email13" ></td>
                                </tr>

                            </tbody>



                        </table>
<br>
                        <table>

                        <div class="form-group col-md-6 ">
                            <label>3.10.    Quel est la composition de votre équipe de gestion ? </label>
                           <textarea placeholder="" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label>3.11.    Quel est votre rôle dans le projet ?</label>
                           <textarea placeholder="" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-6 ">
                             <label>3.12.   Etes-vous à plein temps dans le projet ? </label>
                            <textarea placeholder="" class="form-control"></textarea>
                        </div>



                        <div class="form-group col-md-6">
                             <label>3.13.	Décrivez le plus précisément possible votre expérience dans l’activité envisagée</label>
                            <textarea placeholder="Description activité"></textarea> </div>
                        <div class="form-group col-md-6">
                            <label>3.14.	Comment pouvez-vous décrire votre niveau de connaissance de l’activité/ métier ? </label>
                            <textarea placeholder="Description activité"></textarea> </div>
                        <div class="form-group col-md-6">
                             <label>3.15.	Avez-vous pris part à une formation en entrepreneuriat ? </label>
                            <textarea placeholder="Description activité"></textarea> </div>


                         <div class="form-group col-md-6">
                             <label>3.16.	Avez-vous pris part à une formation en gestion d’entreprises ? </label>
                            <textarea placeholder="Description activité"></textarea> </div>

                            <div class="form-group col-md-6">
                                <label>3.17.	Comment pouvez-vous décrire votre niveau de pratique en entrepreneuriat ?  </label>
                                <textarea placeholder="Description activité"></textarea> </div>

                            <div class="form-group col-md-6">
                                <label>3.18.	Comment pouvez-vous décrire votre niveau de pratique en gestion d’entreprise  </label>
                                <textarea placeholder="Description activité"></textarea> </div>

                        </table>
                    </div>

                    <div class="tab">
                        <h5>IV. BESOINS : </h5>
                      <table>

                        <div class="form-group col-md-6">
                            <label>4.1. Quels sont vos besoins actuels en formation pour mener à bien votre projet</label>
                           <textarea placeholder="Description activité"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>3.11.    Quel est votre rôle dans le projet ?</label>
                           <textarea placeholder="Description activité"></textarea>
                        </div>

                        <div class="form-group col-md-6 ">
                             <label>4.2. Avez-vous d’autres besoins d’accompagnement (coaching, suivi, etc.)</label>
                            <textarea placeholder="Description activité"></textarea>
                        </div>

                        <div class="form-group col-md-6 ">
                             <label>4.3.    Avez-vous un besoin de financement ?</label>
                            <textarea placeholder="Description activité"></textarea> </div>
                        <div class="form-group col-md-6 pad-left-o">
                            <label>4.4. Quels sont les investissements à réaliser avec le concours financier sollicité</label>
                            <textarea placeholder="Description activité"></textarea> </div>
                        <div class="form-group col-md-6 pad-left-o">
                             <label>4.5.  Quels sont vos besoins actuels en accompagnement technique ou en gestion pour mener à bien votre projet ? ?</label>
                            <textarea placeholder="Description activité"></textarea> </div>

                        </table>
                    </div>

                    <div style="margin-top:10px;">
                      <div style="float:right;margin-top:10px;">
                        <button type="button" id="prevBtn" class="btn btn-warning btn-rounded" onclick="nextPrev(-1)">Précédent</button>
                        <button type="button" id="nextBtn" class="btn btn-info btn-rounded" onclick="nextPrev(1)">Suivant</button>
                      </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:20px;">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                    </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection


 @section('js')

 <script type="text/javascript">
     var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Soumettre";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    // if (y[i].value == "") {
    //    add an "invalid" class to the field:
    //   y[i].className += " invalid";
    //    and set the current valid status to false:
    //   valid = false;
    // }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
 </script>

@endsection


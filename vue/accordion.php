<?php
  session_start();
  if (isset($_SESSION['login']) && isset($_SESSION['password'])) {?>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>jQuery UI Accordion - Default functionality</title>
          <!-- <link rel="stylesheet" href="../jquery-ui-1.12.0.custom/jquery-ui.css"> -->
          <link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="../dist/css/myStyle.css">
          <link rel="stylesheet" type="text/css" href="../vue/formulaireEntretien.css">
          <link rel="stylesheet" type="text/css" href="../vue/accordion.css"><!--
           <!link rel="stylesheet" href="/resources/demos/style.css">-->
          <script src="../dist/js/jquery.js"></script>
          <script src="../dist/js/bootstrap.js"></script>
          <!-- <link rel="stylesheet" type="text/css" href="../vue/pieceJustificative.css"> --><!--
          <! // <script src="../jquery-ui-1.12.0.custom/jquery-ui.js"></script> -->

          <!-- <link href="../asset/css/bootstrap.min.css" rel="stylesheet"> -->
          <link href="../dist/css/styles_noir_medialoot.css" rel="stylesheet">
          <script src="../dist/js/lumino.glyphs.js"></script>

        </head>
        <body> <!--afficher un sms s il veut fermer la page pour lui rappeler de se deconnecter-->
              <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="../vue/accueilAdmin.php"><span>Assistant</span>Admin</a></font>
                      <ul class="user-menu">
                        <li class="dropdown pull-right">
                          <a href="../controle/deconnexion.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Déconnexion</a>
                        </li>
                      </ul>
                    </div>
                            
                  </div><!-- /.container-fluid -->
            </nav>
              <form method="POST" action="../controle/accordion_controleur.php" enctype="multipart/form-data">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="change('1');">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        Cas<span class="glyphicon glyphicon-chevron-right" id="1"></span>
                      </h4>
                    </div></a>
                     <div id="collapse1" class=" panel-body panel-collapse collapse"> 
                          <div class="">
                              <label for="identifiant" class="col-xs-2 control-label">Identifiant</label>
                              <div class="">
                                  <input type="text" id="identifiant" class="form-control" placeholder="Identifiant obligatoire" name="idEtu" required>
                              </div>
                          </div>
                          <div class="">
                              <label for="nom" class="col-xs-2 control-label">Nom</label>
                              <div class="">
                                  <input type="text" id="nom" class="form-control obligatoire" placeholder="Nom" name="nom" required>
                              </div>
                          </div>
                          <div class="">
                              <label for="prenom" class="col-xs-2 control-label">Prenom</label>
                              <div class="">
                                  <input type="text" id="prenom" class="form-control obligatoire" placeholder="Prenom" name="prenom" required>
                              </div>
                          </div> 
                          <div class="">
                              <label for="tel" class="col-xs-2 control-label">Tel</label>
                              <div class="">
                                  <input type="text" id="tel" class="form-control obligatoire" placeholder="Tel" name="tel" required>
                              </div>
                          </div>               
                     </div>
                  </div> 
                    
                  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" onclick="change('2');">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        Entretien individuel <span class="glyphicon glyphicon-chevron-right" id="2"></span>
                      </h4>
                    </div></a>
                    <div id="collapse2" class=" panel-body panel-collapse collapse">
                       <div class="col-xs-offset-1" >
                              <form role="form" class="form-horizontal">
                                  <div class="form-group row">
                                      <div class="col-xs-12">
                                        <div class="col-xs-5">
                                          <div class="col-xs-4">
                                              <input type="text" id="structure" class="form-control" placeholder="Structure" name="structureEI">
                                          </div>    
                                          <div class="col-xs-4">
                                              <input type="text" id="anneeScolaire" class="form-control" placeholder="Année scolaire" name="anneeScolaireEI">
                                          </div>
                                          <div class="col-xs-4">
                                              <input type="text" id="numOrdFiche" class="form-control" placeholder="N°Ord.Fiche" name="numOrdFicheEI">
                                          </div>
                                      </div>    
                                      <div class="col-xs-5">
                                            <label for="date" class="col-xs-2 control-label">Date</label>
                                            <div class="col-xs-6">
                                                 <input type="date" id="date" class="form-control" placeholder="Date" name="dateEI">
                                            </div>
                                      </div>
                                      <div class="col-xs-5">
                                          <div class="col-xs-4">
                                              <label for="structure" class="control-label">Structure</label>
                                          </div>    
                                          <div class="col-xs-4">
                                              <label for="anneeScolaire" class="control-label">AnneeScolaire</label>
                                          </div>
                                          <div class="col-xs-4">
                                              <label for="numOrdFiche" class="control-label">N°Ord.Fiche</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="form-group col-xs-10"><br>                   
                                             <img src="../image/titre.png" class="img-responsive col-xs-11">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <!--<div class="col-xs-4">
                                            <label for="prenom" class="col-xs-3 control-label">Prenom</label>
                                            <div class="col-xs-9">
                                                 <input type="text" id="prenom" class="form-control" placeholder="Prenom">
                                            </div>
                                      </div>
                                      <div class="col-xs-4">
                                            <label for="nom" class="col-xs-3 control-label">Nom</label>
                                            <div class="col-xs-9">
                                                 <input type="text" id="nom" class="form-control" placeholder="Nom">
                                            </div>
                                      </div>-->
                                    </div>
                                    <div class="form-group row">
                                         <div class="col-xs-5 col-lg-9">
                                         <table class="table table-striped table-bordered table-hover table-condensed" >
                                             <tr>
                                                <th colspan="3">
                                                    1. Données socio-démographiques
                                                </th>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <b>1.1 Sexe :</b><br><br>
                                                     <input type="radio" name="sexeClient" value="H">1=H <br>
                                                     <input type="radio" name="sexeClient" value="F">2=F
                                                </td>
                                                <td>
                                                   <b>1.3 Situation matrimoniale</b><br><br>
                                                   <input type="radio" name="situationMatrimonialeClient" value="Célibataire">1=Célibataire <br>
                                                     <input type="radio" name="situationMatrimonialeClient" value="Marié(e)">2=Marié(e)  <br>
                                                     <input type="radio" name="situationMatrimonialeClient" value="Divorcé(e)">3=Divorcé(e)  <br>
                                                     <input type="radio" name="situationMatrimonialeClient" value="Remarié">4=Remarié <br>
                                                     <input type="radio" name="situationMatrimonialeClient" value="Veuf(ve)">5=Veuf(ve)     <br>
                                                     <input type="radio" name="situationMatrimonialeClient" value="Autre(s)">6=Autre(s) <br>
                                                </td>
                                                <td>
                                                   <b>1.5 Lieu de résidence</b><br><br>
                                                   &nbsp&nbsp&nbsp <label>1.5.1- Localité :</label> 
                                                   <input type="text" name="localite" placeholder="Localité"> <br><br>
                                                   &nbsp&nbsp&nbsp <label>Tel :</label> 
                                                   <input type="text" name="telEI" placeholder="tel"> <br><br>
                                                   &nbsp&nbsp&nbsp <label>1.5.2- Pays :</label> 
                                                   <input type="radio" name="pays" value="SEN">1=SEN <br>
                                                       <input type="radio" name="pays" value="Autre" id="autreResident1">2=Autre <span id="autreResident2"><input type="text" name="autrePays" placeholder="Préciser"></span>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <b>1.2 : Age</b><br><br>
                                                   <input type="number" placeholder="age" name="ageClient"><label for="age">ans</label>
                                                </td>
                                                <td>
                                                   <b>1.4: Activité professionnelle</b><br><br>
                                                   <input type="radio" name="activiteProfessionnelle" value="Etudiant">1=Etudiant<br>
                                                     <input type="radio" name="activiteProfessionnelle" value="PATS">2=PATS  <br>
                                                     <input type="radio" name="activiteProfessionnelle" value="PER">3=PER   <br>
                                                     <input type="radio" name="activiteProfessionnelle" value="Autre(s)" id="autreProfessionnelle1">4=Autre(s) 
                                                     <span id="autreProfessionnelle2"><input type="text" name="autreActiviteProfessionnelle" placeholder="Préciser"></span>
                                                </td>
                                                <td>
                                                   <b>1.6 Avec qui vivez vous ?</b><br><br>
                                                   <input type="radio" name="avecQui" value="Père">1=Père<br>
                                                     <input type="radio" name="avecQui" value="Mère">2=Mère  <br>
                                                     <input type="radio" name="avecQui" value="Père et Mère">3=Père et Mère   <br>
                                                     <input type="radio" name="avecQui" value="Autre(s)" id="autreVivre1">4=Autre(s) <br>
                                                     <span id="autreVivre2"><input type="text" name="autreAvecQui" placeholder="Préciser"></span>
                                                </td>                    
                                             </tr>
                                             <tr>
                                                <td rowspan="2">
                                                   <b>2.  Données socio-éducatives Quel est votre niveau d’étude ?</b><br><br>
                                                   <input type="radio" name="niveau" value="1ére Année">1=1ére Année <br>
                                                     <input type="radio" name="niveau" value="2éme Année">2=2éme Année  <br>
                                                     <input type="radio" name="niveau" value="Licence (DIC1)">3=Licence (DIC1) <br>
                                                     <input type="radio" name="niveau" value="Master 1 (DIC2)">4=Master 1 (DIC2) <br>
                                                     <input type="radio" name="niveau" value="Master 2 (DIC3)">5=Master 2 (DIC3) <br>
                                                       <input type="radio" name="niveau" value="Autre(s)">6=Autre(s) <br>
                                                </td>
                                                <td colspan="2">
                                                  <b>3. Approche comportementale</b>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                  <b>3.1- Client venu de lui-même</b><br><br>
                                                      <input type="radio" name="venu" value="oui">1=oui &nbsp&nbsp&nbsp&nbsp
                                                      <input type="radio" name="venu" value="non" id="non1">2=non <br><br>
                                                  <span id="non2"><b>3.2- Si non, Adressé par qui ?</b><br><br>
                                                    <input type="radio" name="VenuA" value="Administration">1=Administration  <br><!-----------------les names-->
                                                      <input type="radio" name="VenuA" value="Département">2=Département <br>
                                                      <input type="radio" name="VenuA" value="Service Médical">3=Service Médical <br>
                                                      <input type="radio" name="VenuA" value="Structure Etudiante">4=Structure Etudiante <br>
                                                      <input type="radio" name="VenuA" value="Scolarité">5=Scolarité <br>
                                                        <input type="radio" name="VenuA" value="Autre(s)" id="autreAdresse1">6=Autre(s) <br>
                                                        <span id="autreAdresse2"><input type="text" name="autre" placeholder="Préciser"></span></span>
                                                </td>
                                                <td>
                                                  <b>3.3- Pourquoi ?</b><br><br>
                                                    <input type="radio" name="pourquoi" value="Entretien">1=Entretien  <br>
                                                      <input type="radio" name="pourquoi" value="Problème d\'integration et d\'adaptation">2=Problème d'integration et d'adaptation <br>
                                                      <input type="radio" name="pourquoi" value="Aide d\'urgence">3=Aide d'urgence <br>
                                                      <input type="radio" name="pourquoi" value="Problème scolaire">4=Problème scolaire <br>
                                                      <input type="radio" name="pourquoi" value="Problèmede santé">5=Problèmede santé <br>
                                                      <input type="radio" name="pourquoi" value="Problème de Restauration">6=Problème de Restauration <br>
                                                      <input type="radio" name="pourquoi" value="Stress et ou Angoisse">7=Stress et ou Angoisse <br>
                                                      <input type="radio" name="pourquoi" value="Prise en chargePsychosociale">8=Prise en chargePsychosociale <br>
                                                      <input type="radio" name="pourquoi" value="IEC/CCC">9=IEC/CCC <br>
                                                        <input type="radio" name="pourquoi" value="Autre(s)">10=Autre(s)
                                                </td>
                                             </tr>
                                             <tr>
                                                <td colspan="3">
                                                  <table>
                                                     <tr>
                                                        <td>
                                                          <b>4. Résumé du problème du client :</b><br><br>
                                                      <textarea cols="50" rows="20" name="resumeProblemeClient"></textarea>
                                                    </td>
                                                    <td align="center">
                                                      <b>6. Référence :</b><br><br>
                                                      <b>6.1-Client(e)référée ?</b><br><br>
                                                      <input type="radio" name="refere" value="non">1=non<br>
                                                            <input type="radio" name="refere" value="oui" id="refere1">2=oui<br>
                                                              <span id="refere2">
                                                                 <input type="text" name="refere" placeholder="Préciser"><br><br><br>
                                                                 <b>6.2-Structure de Référence:</b><br>
                                                                    <input type="text" name="structureRef"><br><br><br>
                                                                 <b>6.3-Date de Référence :</b><br>
                                                                    <input type="date" name="dateRef"><br>
                                                              </span>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>
                                                      <b>5. Solutions Envisagées :</b><br><br>
                                                      <textarea cols="50" rows="20" name="solutionEnvisagees"></textarea>
                                                    </td>
                                                    <td>
                                                      <b>7.Commentaires :</b><br><br>
                                                      <textarea cols="50" rows="20" name="commentaire"></textarea>
                                                 </td>  
                                                  </table>
                                             </tr>
                                         </table>
                                      </div>   
                                    </div>  
                                  </div>       
                           </div>  
                    </div>
                  </div>
                  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="change('3');">
                    <div class="panel-heading">
                      <h4 class="panel-title">               
                        Enquête sociale <span class="glyphicon glyphicon-chevron-right" id="3"></span>
                      </h4>
                    </div></a>
                    <div id="collapse3" class="panel-body panel-collapse collapse">
                           <div class="col-xs-offset-1">
                            <form>
                             <div class="form-group row">
                                  <!--<div class="col-xs-12">
                                        <div class="col-xs-5">
                                          <div class="col-xs-4">
                                              <input type="text" id="structure" class="form-control" placeholder="Structure">
                                          </div>    
                                          <div class="col-xs-4">
                                              <input type="text" id="anneeScolaire" class="form-control" placeholder="Année scolaire">
                                          </div>
                                          <div class="col-xs-4">
                                              <input type="text" id="numOrdFiche" class="form-control" placeholder="N°Ord.Fiche">
                                          </div>
                                      </div>    
                                      <div class="col-xs-5">
                                            <label for="date" class="col-xs-2 control-label">Date</label>
                                            <div class="col-xs-6">
                                                 <input type="date" id="date" class="form-control" placeholder="Date">
                                            </div>
                                      </div>
                                      <div class="col-xs-5">
                                          <div class="col-xs-4">
                                              <label for="structure" class="control-label">Structure</label>
                                          </div>    
                                          <div class="col-xs-4">
                                              <label for="anneeScolaire" class="control-label">AnneeScolaire</label>
                                          </div>
                                          <div class="col-xs-4">
                                              <label for="numOrdFiche" class="control-label">N°Ord.Fiche</label>
                                          </div>
                                      </div>
                                   </div>-->
                                    <div class="form-group row">
                                          <div class="form-group col-xs-12">
                                                 <img src="../image/titre2.png">
                                           </div>
                                    </div>
                               </div>     
                              <div class="form-group row" >
                                  <u><strong><h4>IDENTIFICATION DU CLIENT</h4></strong></u>
                              </div>
                             <div class="form-group row">
                                    <div class="col-xs-9">
                                         <table class="table table-striped table-bordered table-hover table-condensed" >
                                           <!--<tr>
                                                 <td>
                                                         <u><strong><label for="prenom_nom" class="control-label">Prénom(s)et NOM</label></strong></u>
                                                </td>
                                                 <td colspan="4">
                                                          <div  class=" col-xs-6">    
                                                            <input type="text" id="prenom" class="form-control" placeholder="Prenom">
                                                          </div>
                                                          <div  class=" col-xs-6">
                                                            <input type="text" id="nom" class="form-control" placeholder="Nom">
                                                          </div>
                                                </td>   
                                          </tr>-->

                                           <tr>
                                                <td>
                                                          <u><strong><label for="sexe" class="control-label">Sexe</label></strong></u></br></br>
                                                           <input type="text" id="sexe" class="form-control" placeholder="Sexe" name="sexeClientES">
                                                </td>
                                                 <td>
                                                          <u><strong><label for="age" class="control-label">Age</label></strong></u></br></br>
                                                           <input type="text" id="age" class="form-control" placeholder="Age" name="ageES">
                                                </td> 
                                                <td>
                                                          <u><label for="sit_mat" class="control-label petit">Situation Matrimoniale</label></u></br>
                                                           <input type="text" id="sit_mat" class="form-control" placeholder="Situation Matrimoniale" name="situationMatrimonialeES">
                                                </td>
                                                <td>      
                                                          <u><strong><label for="dep" class="control-label">Département</label></strong></u></br></br>
                                                           <input type="text" id="dep" class="form-control" placeholder="Département" name="departement">    
                                                </td>
                                                <td>            
                                                          <u><strong><label for="ann_etud" class="control-label">Année d’études</label></strong></u></br></br>
                                                           <input type="text" id="ann_etud" class="form-control" placeholder="Année d’études" name="anneeEtudeES">
                                                </td> 
                                          </tr>

                                         <tr>
                                                <td>
                                                          <u><strong><label for="etat_sante" class="control-label">Etat de Santé</label></strong></u>
                                                </td>
                                                <td colspan="4">
                                                      <div class="row  col-xs-offset-1">
                                                          <div class="row">
                                                            <div class="col-xs-4">
                                                                <u><strong><label for="bon" class="control-label">Bon</label></strong></u>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                 <u><strong><label for="precaire" class="control-label">Précaire</label></strong></u>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                 <u><strong><label for="handicap" class="control-label">Handicap</label></strong></u>
                                                            </div>
                                                          </div>
                                                          <div class="row" id="ens">
                                                                <input type="radio" id="bon" class="col-xs-4 col-xs-offset-0" name="etat" placeholder="" value="Bon">
                                                                <input type="radio" id="precaire" class="col-xs-4" name="etat" placeholder="" value="Précaire">
                                                                <input type="radio" id="handicap" class="col-xs-4" name="etat"  placeholder="" value="Handicap">
                                                                <br>
                                                                <div class="row" id="infoSup">
                                                                  <div class="col-xs-2">
                                                                    <u><strong><label for="lequel" class="control-label lequel">Lequel?</label></strong></u>
                                                                  </div>
                                                                  <div class="col-xs-8">
                                                                     <input type="text" id="lequel" name="lequel_etat" placeholder="">
                                                                  </div>
                                                                </div>
                                                          </div>  
                                                     </div>  
                                               </td>
                                           </tr>

                                          <tr>
                                                <td>
                                                  <u><strong><label for="adresse" class="control-label">Adresse</label></strong></u>
                                                </td>
                                                <td colspan="4">    
                                                  <input type="text" id="adresse" class="form-control" placeholder="Adresse" name="adresse">
                                                </td> 
                                           </tr>
                                          <tr>
                                                <td>
                                                  <u><strong><label for="email" class="control-label">Email</label></strong></u>
                                                </td>
                                                <td colspan="4">    
                                                  <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                                                </td>
                                           </tr>   
                                            </table> 
                                    </div>
                              </div>
                              <div class="row form-group" >
                                    <u><strong><h4>SITUATION SOCIO-ECONOMIQUE</h4></strong></u>
                              </div>
                              <div class="col-xs-9">
                                  <table class="table table-striped table-bordered table-hover table-condensed">
                                      <tr>
                                        <td>
                                          <u><strong>Composition et Situation  de la Famille</strong></u>
                                        </td>
                                        <td colspan="4">    
                                          <textarea cols="50" rows="12" name="compositionSituationFamille"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <u><strong>Habitat</strong></u>
                                        </td>
                                        <td colspan="4">    
                                          <textarea cols="50" rows="12" name="habitat"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <u><strong>Dynamique familiale et environnementale</strong></u>
                                        </td>
                                        <td colspan="4">    
                                          <textarea cols="50" rows="12" name="dynamiqeFamilialeEnvironnementale"></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <u><strong>Situation du problème du client</strong></u>
                                        </td>
                                        <td colspan="4">    
                                          <textarea cols="50" rows="12" name="situationProblemeClient"></textarea>
                                        </td>
                                      </tr>
                                  </table>
                            <div class="col-xs-9" >
                                    <u><strong><h4>DIAGNOSTIC SOCIAL</h4></strong></u>
                            </div>
                                  <table class="table table-striped table-bordered table-hover table-condensed">
                                      <tr>
                                        <td>
                                          <u><strong>Problème Central du Client et Propositions</strong></u>
                                        </td>
                                        <td colspan="4">    
                                          <textarea cols="50" rows="12" name="problemeCentraleClientProposition"></textarea>
                                        </td>
                                      </tr>
                                  </table>   
                             <div class="col-xs-9" >
                                    <u><strong><h4>SUIVI</h4></strong></u>
                            </div>
                              <div class="col-xs-9">
                                  <table class="table table-striped table-bordered table-hover table-condensed" id="tableSuivi">
                                    <tr>
                                      <th>DATE</th>
                                      <th>NATURE DEMANDE</th>
                                      <th>ACTION EFFECTUEE</th>
                                      <th>OBSERVATIONS</th>
                                    </tr> 
                                    <tr>
                                       <td><input type="date" name="date0"></td>
                                       <td><input type="text" name="natureDemande0"></td>
                                       <td><input type="text" name="actionEffectuee0"></td>
                                       <td><input type="text" name="observation0"></td>
                                    </tr>  
                                  </table>
                                  <input type="hidden" id="hiddenSuivi" name="hiddenSuivi" value="1">
                                  <label for="plus" class="btn btn-info btn-lg">
                                     <span class="glyphicon glyphicon-plus"></span>
                                  </label>
                                  <input type="button" id="plus" onclick="ajoutSuivi();">
                              </div>         
                    </div>
                  </div>
                </div>
                </div>
                <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4" onclick="change('4');">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      Pièce Justificative <span class="glyphicon glyphicon-chevron-right" id="4"></span>
                    </h4>
                  </div></a>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table id="tableJustificatif" class="table table-bordered table-hover table-condensed">
                         <tr>
                           <label for="identifiantJustificatif" class="col-xs-2 control-label">Identifiant du justificatif</label>
                           <input type="text" id="identifiantJustificatif" class="form-control" placeholder="Identifiant du justificatif" name="idJustificatif0">          
                           <label for='fichier'>
                           <abbr title='choisissez le fichier'><span class='glyphicon glyphicon-paperclip btn-lg'></span></abbr></label>
                           <span id='spanJustificatif'><input type='file' id='fichierJustificatif' class='btn btn-danger' name="fichier[]" multiple="multiple"></span> <br> 
                           <label for='description'>Description</label><br>
                           <textarea cols='60' rows='6' name="descriptionJustificatif0" id="descriptionJustificatif"></textarea> <br><br>
                         </tr>
                      </table> 
                      <input type="hidden" id="hiddenJustificatif" name="hiddenJustificatif" value="1">
                      <input type='button' name='ajouterJustificatif' value='ajouter un fichier' class='btn btn-success' onclick='ajoutJust();'>
                    </div>
                  </div>
               </div>
               <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5" onclick="change('5');">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      Intervention <span class="glyphicon glyphicon-chevron-right" id="5"></span>
                    </h4>
                  </div></a>
                  <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table id="tableIntervention" class="table table-bordered table-hover table-condensed">
                         <tr>
                           <label for="identifiantIntervention" class="col-xs-2 control-label">Identifiant d' Intervention</label>
                           <input type="text" id="identifiantIntervention" class="form-control" placeholder="Identifiant du Intervention" name="idDossier0">
                           <label for='fichier'>
                           <abbr title='choisissez le fichier'><span class='glyphicon glyphicon-paperclip btn-lg'></span></abbr></label>
                           <input type='file' id='fichier' class='btn btn-danger' name="fichier[]" multiple="multiple"> <br> 
                           <label for='description'>Description</label><br>
                           <textarea cols='60' rows='6' name="descriptionIntervention0"></textarea> <br>
                         </tr>
                      </table> 
                      <input type="hidden" id="hiddenIntervention" name="hiddenIntervention" value="1">
                      <input type='button' name='ajouterIntervention' value='ajouter un fichier' class='btn btn-success' onclick='ajoutInter();'>
                    </div>
                  </div>
               </div>
               <input type='reset' name='annuler' class='btn btn-danger'> 
               <input type='submit' name='valider' id="valider" class='btn btn-success'>
            </form>
            <script type="text/javascript" src="../vue/accordion.js"></script>
        </body>
        </html>  <?php
  }
  else{
    header("location:../index.php");
  }

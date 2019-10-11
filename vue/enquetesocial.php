<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
      <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Accordion - Default functionality</title>
        <link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../dist/css/myStyle.css">
        <link rel="stylesheet" type="text/css" href="../vue/enquetesocial.css">
        <script src="../dist/js/bootstrap.js"></script>
      </head>
      <body>
            <div class="container col-xs-12 col-xs-offset-5" id="button_enquete">
                  <input type="button" value="modifier" onclick="modifierficheES();" class="btn btn-info">
            </div>

             <div id="enquete" class="container">
                         <div class="col-xs-offset-1">
                          <form id="formES" role="form" action="enquetesocial_controleur.php" method="POST" class="form-horizontal">
                           <div class="form-group row">
                                <div class="col-xs-12">
                                  <?php foreach ($enquete_sociale as $es) { ?>
                                    <input type="hidden" name="idEtu" value="<?php echo $es['idEtu'];?>">
                                    <div class="col-xs-5">
                                        <div class="col-xs-4">
                                            <input type="text" id="structure" name="structureES" class="form-control" value="<?php echo $es['structure'];?>" placeholder="Structure">
                                        </div>    
                                        <div class="col-xs-4">
                                            <input type="text" id="anneeScolaire" name="anneeScES" class="form-control" value="<?php echo $es['anneeScolaire'];?>" placeholder="Année scolaire">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" id="numOrdFiche" name="numOrdFicheES" class="form-control" value="<?php echo $es['numOrdFiche'];?>" placeholder="N°Ord.Fiche">
                                        </div>
                                    </div>    
                                    <div class="col-xs-5">
                                          <label for="date" class="col-xs-2 control-label">Date</label>
                                          <div class="col-xs-6">
                                               <input type="date" id="date" name="dateScES" class="form-control" value="<?php echo $es['date'];?>" placeholder="Date">
                                          </div>
                                    </div>
                                  <?php } ?>  
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
                                         <tr>
                                               <td>
                                                       <u><strong><label for="prenom_nom" class="control-label">Prénom(s)et NOM</label></strong></u>
                                              </td>
                                             <?php foreach ($etudiant as $etu) { ?>
                                               <td colspan="4">
                                                        <div  class=" col-xs-6">    
                                                          <input type="text" id="prenom" name="prenomES" value="<?php echo $etu['prenom'];?>" class="form-control" placeholder="Prenom">
                                                        </div>
                                                        <div  class=" col-xs-6">
                                                          <input type="text" id="nom" name="nomES" value="<?php echo $etu['nom'];?>" class="form-control" placeholder="Nom">
                                                        </div>
                                              </td> 
                                             <?php } ?>       
                                        </tr>
                                      <?php foreach ($identification_client as $ic) { ?>
                                  
                                         <tr>
                                              <td>
                                                        <u><strong><label for="sexe" class="control-label">Sexe</label></strong></u></br></br>
                                                         <input type="text" name="sexeES" value="<?php echo $ic['sexeClient'];?>" id="sexe" class="form-control" placeholder="Sexe">
                                              </td>
                                               <td>
                                                        <u><strong><label for="age" class="control-label">Age</label></strong></u></br></br>
                                                         <input type="text" name="ageES" id="age" value="<?php echo $ic['ageClient'];?>" class="form-control" placeholder="Age">
                                              </td> 
                                              <td>
                                                        <u><label for="sit_mat" class="control-label petit">Situation Matrimoniale</label></u></br>
                                                         <input type="text" name="situationES" id="sit_mat" value="<?php echo $ic['situationMatrimonialeClient'];?>" class="form-control" placeholder="Situation Matrimoniale">
                                              </td>
                                              <td>      
                                                        <u><strong><label for="dep" class="control-label">Département</label></strong></u></br></br>
                                                         <input type="text" name="departementES" id="dep" value="<?php echo $ic['departement'];?>" class="form-control" placeholder="Département">    
                                              </td>
                                              <td>            
                                                        <u><strong><label for="ann_etud" class="control-label">Année d’études</label></strong></u></br></br>
                                                         <input type="text" id="ann_etud" name="ann_etudES" value="<?php echo $ic['anneeEtude'];?>" class="form-control" placeholder="Année d’études">
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
                                                               <u><strong><label for="precaire" id="etatsante2" class="control-label">Précaire</label></strong></u>
                                                          </div>
                                                          <div class="col-xs-4">
                                                               <u><strong><label for="handicap" id="etatsante3" class="control-label">Handicap</label></strong></u>
                                                          </div>
                                                        </div>
                                                        <div class="row" id="ens">
                                                              <input type="radio"  id="bon"    value="bon" class="col-xs-4 col-xs-offset-0 etatsante" name="etat" placeholder="">
                                                              <input type="radio" id="precaire"  value="precaire" class="col-xs-4 etatsante" name="etat" placeholder="">
                                                              <input type="radio" id="handicap"  value="handicap" class="col-xs-4 etatsante" name="etat"  placeholder="">
                                                              <br>
                                                              <div class="row" id="infoSup">
                                                                <div class="col-xs-2">
                                                                  <u><strong><label for="lequel" class="control-label lequel">Lequel?</label></strong></u>
                                                                </div>
                                                                <div class="col-xs-8">
                                                                   <input type="text" class="lequel" value="" id="lequel" name="lequel_etat" placeholder="">
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
                                                <input type="text" name="adresseES" value="<?php echo $ic['adresse'];?>" id="adresse" class="form-control" placeholder="Adresse">
                                              </td> 
                                         </tr>
                                        <tr>
                                              <td>                              
                                                <u><strong><label for="telephone" class=" adresse control-label">Téléphone</label></strong></u>
                                              </td>
                                              <td colspan="2">
                                                <div class="row"></div>
                                                <div>
                                                  <input type="text" name="telephoneES"  id="telephone" value="<?php echo $ic['tel'];?>" class="form-control" placeholder="Téléphone">
                                                </div>
                                              </td>
                                              <td colspan="2">
                                                 <div class="row col-xs-offset-2">
                                                    <u><strong><label for="email" class="control-label">E-mail</label></strong></u>
                                                 </div>
                                                 <div>
                                                   <input type="email" name="emailES" id="email" value="<?php echo $ic['email'];?>" class="form-control" placeholder="E-mail">
                                                 </div>
                                              </td>
                                         </tr>  
                                                  <?php
                                                       $etatsan=$ic["etatSante"];
                                                       $resulatetat=explode("-",$etatsan);
                                                       $valeur2=$resulatetat[0];
                                                       $valeur3=$resulatetat[1];
                                                       echo"<script type='text/javascript'>           
                                                            for (var i=0;i<4;i++) { 
                                                                        h=document.querySelectorAll('.etatsante');
                                                                        m=document.querySelector('#lequel');
                                                                      if(h[i].value=='$valeur2'){
                                                                          h[i].setAttribute('checked','checked');
                                                                          m.setAttribute('value','$valeur3');
                                                                      }    
                                                                 }
                                                            </script>"; 
                                                  ?> 
                               <?php } ?>   
                                          </table> 
                                  </div>
                            </div>
                          <?php foreach ($situation_socio_economique as $sse) { ?>
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
                                        <textarea cols="50" name="compositionSituationFamille" rows="12"><?php echo $sse['compositionSituationFamille'];?></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <u><strong>Habitat</strong></u>
                                      </td>
                                      <td colspan="4">    
                                        <textarea cols="50" name="habitat" rows="12"><?php echo $sse['habitat'];?></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <u><strong>Dynamique familiale et environnementale</strong></u>
                                      </td>
                                      <td colspan="4">    
                                        <textarea cols="50" name="dynamiqueFamilialeEnvironnementale" rows="12"><?php echo $sse['dynamiqueFamilialeEnvironnementale'];?></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <u><strong>Situation du problème du client</strong></u>
                                      </td>
                                      <td colspan="4">    
                                        <textarea cols="50" name="situationProblemeClient" rows="12"><?php echo $sse['situationProblemeClient'];?></textarea>
                                      </td>
                                    </tr>
                                </table>
                              </div>
                          <?php } ?> 
                            <div class="col-xs-9" >
                                  <u><strong><h4>DIAGNOSTIC SOCIAL</h4></strong></u>
                            </div>
                          <?php foreach ($diagnostic_social as $diagno ) {?>
                            <div class="col-xs-9">
                                <table class="table table-striped table-bordered table-hover table-condensed">
                                    <tr>
                                      <td>
                                        <u><strong>Problème Central du Client et Propositions</strong></u>
                                      </td>
                                      <td colspan="4">    
                                        <textarea cols="50" name="problemeCentraleClientPropositions" rows="12"><?php echo $diagno['problemeCentraleClientPropositions'];?></textarea>
                                      </td>
                                    </tr>
                                 </table>   
                            </div> 
                          <?php } ?> 
                           <div class="col-xs-9" >
                                  <u><strong><h4>SUIVI</h4></strong></u>
                            </div>
                            <div class="col-xs-9">
                                <table id="tableSuivi" class="table table-striped table-bordered table-hover table-condensed">
                                  <tr>
                                    <th>DATE</th>
                                    <th>NATURE DEMANDE</th>
                                    <th>ACTION EFFECTUEE</th>
                                    <th>OBSERVATIONS</th>
                                  </tr> 
                                   <?php $i=0;
                                   foreach ($suivi as $sui) { 
                                      echo "<tr>";
                                      echo "   <td><input type='date' name='date$i' value=".$sui['date']."></td>";
                                      echo "   <td><input type='text' name='natureDemande$i' value=".$sui['natureDemande']."></td>";
                                      echo "   <td><input type='text' name='actionEffectuee$i' value=".$sui['actionEffectuee']."> </td>";
                                      echo "   <td><input type='text' name='observation$i' value=".$sui['observations']."></td>";
                                      echo "</tr>"; $i++;
                                   } ?> 
                                </table> 
                                <!-- marche pas --> 
                                <input type="hidden" id="hiddenSuivi" name="hiddenSuivi" value="<?php echo sizeof($suivi);?>"> 
                                <input type='button' name='ajouterSuivi' value='ajouter un suivi' class='btn btn-success' onclick='ajoutsuivi();'> 
                            </div>       
                               <span id="spanES" class="col-xs-12">
                                 
                              </span>        
                   </form>    
                  </div>
                </div>
               <script type="text/javascript" src="../vue/modifierFiche.js"></script>
      </body>
      </html>    <?php       
   }    
   else{
        echo "veuillez vous connecter";
        header("location:../index.php");
   }    
?>
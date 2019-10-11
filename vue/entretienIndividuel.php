<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
		<html>
		<head>
			<title></title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../dist/css/myStyle.css">
			<script type="text/javascript" src="../dist/js/bootstrap.js"></script>
			<link rel="stylesheet" type="text/css" href="../vue/formulaireEntretien.css">
			<link rel="stylesheet" type="text/css" href="../vue/entretienIndividuel.css">
		</head>

		<body>
		   <div class="container col-xs-12 col-xs-offset-5" id="button_entretien">
		       <input type="button" value="modifier" onclick="modifierficheEI();" class="btn btn-info">
		   </div><br><br>
		   <div class="container col-xs-offset-0 col-md-offset-1 col-lg-offset-2" id="entretien" >
		       	<form role="form" class="form-horizontal" id="formEI" action="entretienIndividuel_controleur.php" method="POST">
		            <div class="form-group row">
		                <div class="col-xs-12">
		                	<?php foreach ($entretien_individuel as $ei) { ?>
		                	<input type="hidden" name="idEtu" value="<?php echo $ei['idEtu'];?>">
			                <div class="col-xs-5">
				                <div class="col-xs-4">
				                    <input type="text" id="structure" class="form-control" name="structure" value="<?php echo $ei['structure'];?>" placeholder="Structure">
				                </div>    
				                <div class="col-xs-4">
				                    <input type="text" id="anneeScolaire" class="form-control" name="anneeSc" value="<?php echo $ei['anneeScolaire'];?>" placeholder="Année scolaire">
				                </div>
				                <div class="col-xs-4">
				                    <input type="text" id="numOrdFiche" class="form-control" name="numOF" value="<?php echo $ei['numOrdFiche'];?>" placeholder="N°Ord.Fiche">
				                </div>
				            </div>    
				            <div class="col-xs-5">
			                    <label for="date" class="col-xs-2 control-label">Date</label>
			                    <div class="col-xs-6">
			                         <input type="date" id="date" name="dateSc" class="form-control" value="<?php echo $ei['date'];?>" placeholder="Date">
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
			            	<div class="form-group col-xs-10"><br>            	     
			                     <img src="../image/titre.png" class="img-responsive col-xs-11">
			            	</div>
			            </div>

				        <?php foreach ($etudiant as $etu) { ?>
			            <div class="form-group row">
			            	<div class="col-xs-4">
			                    <label for="prenom" class="col-xs-3 control-label">Prenom</label>
			                    <div class="col-xs-9">
			                         <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $etu['prenom'];?>" placeholder="Prenom">
			                    </div>
				            </div>	
				            <div class="col-xs-4">
			                    <label for="nom" class="col-xs-3 control-label">Nom</label>
			                    <div class="col-xs-9">
			                         <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $etu['nom'];?>" placeholder="Nom">
			                    </div>
				            </div>
			            </div>
			            <?php } ?>
			            <div class="form-group row">
			                 <div class="col-xs-5 col-lg-9">
				            	 <table class="table table-striped table-bordered table-hover table-condensed" >
				       	   	   	   <tr>
				       	   	   	      <th colspan="3">
				       	   	   	      	  1. Données socio-démographiques
				       	   	   	      </th>
				       	   	   	   </tr>
				       	   	   	   <tr>
				       	   	   	   	<?php foreach ($donnees_socio_demographiques as $dsd) { ?>
				       	   	   	      <td>
				       	   	   	      	 <b>1.1	Sexe :</b><br><br>
			                             <input type="radio" name="genre" id="genre1" value="h">1=H <br>
			                             <input type="radio" name="genre" id="genre2" value="f">2=F
				       	   	   	      </td>
				       	   	   	      	<?php
				       	   	   	   		$sx=$dsd["sexeClient"];
				       	   	   	   	   echo"<script type='text/javascript'>           
		                                		for (var i=1;i<3;i++) { 
		                                              	b=document.getElementById('genre'+i).value;
		                        
		                                              if(b=='$sx'){
		                                                  document.getElementById('genre'+i).setAttribute('checked','checked');
		                                              }    
		                                         }
		                                    </script>"; 
		                                 ?> 
				       	   	   	   	<?php } ?> 
				       	   	   	   	<?php foreach ($donnees_socio_demographiques as $dsd) { ?>
				       	   	   	      <td>
				       	   	   	      	 <b>1.3 Situation matrimoniale</b><br><br>
				       	   	   	      	 <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="celibataire">1=Célibataire <br>
			                             <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="marie">2=Marié (e)  <br>
			                             <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="divorce">3=Divorcé(e)	 <br>
			                             <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="remarie">4=Remarié <br>
			                             <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="veuf">5=Veuf (ve)     <br>
			                             <input type="radio" name="situationMatrimonialeClient" class="matrimoniale" value="autre">6=Autre (s) <br>
				       	   	   	      </td>
				       	   	   	      	<?php 
				       	   	   	      		$smc=$dsd["situationMatrimonialeClient"];
				       	   	   	      		echo"<script type='text/javascript'>           
		                                                      for (var i=0;i<6;i++) { 
		                                                                  h=document.querySelectorAll('.matrimoniale');
		                                                        
		                                                                if(h[i].value=='$smc'){
		                                                                    h[i].setAttribute('checked','checked');
		                                                                }    
		                                                           }
		                                                      </script>"; 
				       	   	   	      	?>
				       	   	   	    <?php } ?>   
				       	   	   	    <?php foreach ($donnees_socio_demographiques as $dsd) { ?>
				       	   	   	    		<?php 
				       	   	   	      			 	 $lr=$dsd["lieuResidence"];         
			                                        $lrd=explode("-",$lr);
				       	   	   	      		?>
				       	   	   	      <td>
				       	   	   	      	 <b>1.5 Lieu de résidence</b><br><br>
				       	   	   	      	 &nbsp&nbsp&nbsp <label>1.5.1- Localité :</label> 
				       	   	   	      	 <input type="text" name="localite" value="<?php echo $lrd[0];?>" placeholder="Localité"> <br><br>
				       	   	   	      	 &nbsp&nbsp&nbsp <label>Tel :</label> 
				       	   	   	      	 <input type="text" value="<?php echo $lrd[1]; ?>" name="Tel" placeholder="tel"> <br><br>
				       	   	   	      	 &nbsp&nbsp&nbsp <label>1.5.2- Pays :</label> 
				       	   	   	      	 <input type="radio" name="pays" class="pays" id="pays1" value="sen">1=SEN <br>
		                                 <input type="radio" name="pays" class="pays"  id="pays2" value="autre" id="autreResident1">2=Autre <span id="autreResident2" name="autrePays"><input type="text" class="preciser" value="" name="autre" placeholder="Préciser"></span>
				       	   	   	      </td>
				       	   	   	      		<?php
				       	   	   	      				$valeur=$lrd[2];
				       	   	   	      				echo"<script type='text/javascript'>           
		                                                      for (var i=0;i<2;i++) { 
		                                                                  r=document.querySelectorAll('.pays');
		                                                        		  l=document.querySelector('.preciser')
		                                                                if(r[i].value=='$valeur'){
		                                                                    r[i].setAttribute('checked','checked');
		                                                                }
		                                                                else{
		                                                                	l.setAttribute('value','$valeur');
		                                                                }    
		                                                           }
		                                                      </script>"; 
				       	   	   	      		?>
				       	   	   	     <?php } ?>   
				       	   	   	   </tr>
				       	   	   	   <tr>
				       	   	   	      <td>
				       	   	   	      	 <b>1.2	: Age</b><br><br>
				       	   	   	      	 <input type="number" name="age" value="<?php echo $dsd['ageClient'];?>" placeholder="age"><label for="age">ans</label>
				       	   	   	      </td>
				       	   	   	    <?php foreach ($donnees_socio_demographiques as $dsd) { ?>
				       	   	   	      <td>
				       	   	   	      	 <b>1.4: Activité professionnelle</b><br><br>
				       	   	   	      	 <input type="radio" name="activiteProfessionnelle" id="professionnel1" value="etudiant">1=Etudiant<br>
			                             <input type="radio" name="activiteProfessionnelle" id="professionnel2" value="pats">2=PATS  <br>
			                             <input type="radio" name="activiteProfessionnelle" id="professionnel3" value="per">3=PER	 <br>
			                             <input type="radio" name="activiteProfessionnelle" id="professionnel4" value="autre">4=Autre (s) 
			                             <span id="autreProfessionnelle2"><input id="professionnel" type="text" name="autre" placeholder="Préciser"></span>
				       	   	   	      </td>
				       	   	   	      	<?php 
				       	   	   	      			 $ap=$dsd["activiteProfesionnelle"];
				       	   	   	      			echo"<script type='text/javascript'>       
		                                         for (var i=1;i<5;i++) { 
		                                              	c=document.getElementById('professionnel'+i).value;
		                        
		                                              if(c=='$ap'){
		                                                  document.getElementById('professionnel'+i).setAttribute('checked','checked');
		                                              }    
		                                         }
		                              		 </script>";  
				       	   	   	      	?>
				       	   	   	    <?php } ?> 
				       	   	   	    <?php foreach ($donnees_socio_demographiques as $dsd) { ?>     
				       	   	   	      <td>
				       	   	   	      	 <b>1.6 Avec qui vivez vous ?</b><br><br>
				       	   	   	      	 <input type="radio" name="avecqui" id="avecqui1" value="pere">1=Père<br>
			                             <input type="radio" name="avecqui" id="avecqui2" value="mere">2=mère  <br>
			                             <input type="radio" name="avecqui" id="avecqui3" value="pere et mere">3=père et mère	 <br>
			                             <input type="radio" name="avecqui" id="avecqui4" value="autre">4=Autre (s) <br>
			                             <span id="autreVivre2"><input type="text" name="autre" placeholder="Préciser"></span>
				       	   	   	      </td>	
				       	   	   	      	<?php 
				       	   	   	      		$aq=$dsd["avecQui"];
				       	   	   	      		echo"<script type='text/javascript'> 		         
		                                         for (var i=1;i<5;i++) { 
		                                              	d=document.getElementById('avecqui'+i).value;
		                        
		                                              if(d=='$aq'){
		                                                  document.getElementById('avecqui'+i).setAttribute('checked','checked');
		                                              }    
		                                         }
		                                     </script>";   
				       	   	   	      	?>
				       	   	   	    <?php } ?>           	   	   	   
				       	   	   	   </tr>
				       	   	   	   <tr>
				       	   	   	   	<?php foreach ($entretien_individuel as $ei) { ?>

				       	   	   	   	  <td rowspan="2" id="niveau">
				       	   	   	   	  	 <b>2.	Données socio-éducatives Quel est votre niveau d’étude ?</b><br><br>
				       	   	   	      	 <input type="radio" name="niveau" id="niveau1" value="1ére Année">1=1ére Année <br>
			                             <input type="radio" name="niveau" id="niveau2" value="2éme Année">2=2éme Année  <br>
			                             <input type="radio" name="niveau" id="niveau3" value="Licence (DIC1)">3=Licence (DIC1) <br>
			                             <input type="radio" name="niveau" id="niveau4" value="Master 1 (DIC2)">4=Master 1 (DIC2) <br>
			                             <input type="radio" name="niveau" id="niveau5" value="Master 2 (DIC3)">6=Master 2 (DIC3) <br>
		                                 <input type="radio" name="niveau" id="niveau6" value="Autre (s)">7=Autre (s) <br>
				       	   	   	   	  </td>
				       	   	   	   	  <?php
				       	   	   	   	    $t=$ei["donneesSocioEducatives"];
				       	   	   	   	    echo"<script type='text/javascript'> 
		                                         for(var i=1;i<7;i++){
		                                         	   
		                                         	   a=document.getElementById('niveau'+i).value;
		                                         	   
		                                              if(a=='$t'){
		                                                  document.getElementById('niveau'+i).setAttribute('checked','checked');
		                                              }
		                                         }
				       	   	   	   	         </script>"
				       	   	   	   		?>
				       	   	   	   	<?php } ?>  
				       	   	   	   	  <td colspan="2">
				       	   	   	   	  	<b>3. Approche comportementale</b>
				       	   	   	   	  </td>
				       	   	   	   </tr>
				       	   	   	   <tr>
				       	   	   	   	<?php foreach ($approche_comportementale as $AC) { ?>
				       	   	   	   	  <td>
				       	   	   	   	  	<b>3.1- Client venu de lui-même</b><br><br>
		                                  <input type="radio" name="venu" id="venu1" value="oui">1=oui &nbsp&nbsp&nbsp&nbsp
			                              <input type="radio" name="venu" id="venu2" value="non">2=non <br><br>
				       	   	   	   	  	<b>3.2- Si non, Adressé par qui ?</b><br><br>
				       	   	   	   	  	  <input type="radio" name="adresse" id="adresse1" value="Administration">1=Administration  <br>
			                              <input type="radio" name="adresse" id="adresse2" value="Département">2=Département <br>
			                              <input type="radio" name="adresse" id="adresse3" value="Service Médical">3=Service Médical <br>
			                              <input type="radio" name="adresse" id="adresse4" value="Structure Etudiante">4=Structure Etudiante <br>
			                              <input type="radio" name="adresse" id="adresse5" value="Scolarité">5=Scolarité <br>
		                                  <input type="radio" name="adresse" id="adresse6" value="Autre(s)" id="autreAdresse1">6=Autre(s) <br>
		                                  <span id="autreAdresse2"><input type="text" name="autre" placeholder="Préciser"></span>
				       	   	   	   	  </td>
				       	   	   	   	 <?php
				       	   	   	   	    $cvm=$AC["clientVenuM"];
				       	   	   	   	    $cva=$AC["clientVenuA"];
				       	   	   	   	    echo"<script type='text/javascript'> 
		                                         for(var i=1;i<3;i++){
		                                         	   f=document.getElementById('venu'+i).value;
		                                         	   
		                                              if(f=='$cvm'){
		                                                  document.getElementById('venu'+i).setAttribute('checked','checked');
		                                              }
		                                         }
		                                         for(var i=1;i<7;i++){
		                                         	   
		                                         	   g=document.getElementById('adresse'+i).value;
		                                         	   
		                                              if(g=='$cva'){
		                                                  document.getElementById('adresse'+i).setAttribute('checked','checked');
		                                              }
		                                         }
				       	   	   	   	         </script>";
				       	   	   	   		?>   
				       	   	   	   	  <td>
				       	   	   	   	  	<b>3.3- Pourquoi ?</b><br><br>
				       	   	   	   	  	  <input type="radio" name="pourquoi" id="pourquoi1" value="Entretien">1=Entretien  <br>
			                              <input type="radio" name="pourquoi" id="pourquoi2" value="Problème d'integration et d'adaptation">2=Problème d'integration et d'adaptation <br>
			                              <input type="radio" name="pourquoi" id="pourquoi3" value="Aided'urgence">3=Aided'urgence <br>
			                              <input type="radio" name="pourquoi" id="pourquoi4" value="Problème scolaire">4=Problème scolaire <br>
			                              <input type="radio" name="pourquoi" id="pourquoi5" value="Problèmede santé">5=Problèmede santé <br>
			                              <input type="radio" name="pourquoi" id="pourquoi6" value="Problème de Restauration">6=Problème de Restauration <br>
			                              <input type="radio" name="pourquoi" id="pourquoi7" value="Stress et ou Angoisse">7=Stress et ou Angoisse <br>
			                              <input type="radio" name="pourquoi" id="pourquoi8" value="Prise en chargePsychosociale">8=Prise en chargePsychosociale <br>
			                              <input type="radio" name="pourquoi" id="pourquoi9" value="IEC/CCC">9=IEC/CCC <br>
		                                  <input type="radio" name="pourquoi" id="pourquoi10" value="Autre(s)">10=Autre(s)
				       	   	   	   	  </td>
				       	   	   	   	  	 <?php
				       	   	   	   	    $prk=$AC["pourquoi"];
				       	   	   	   	    echo"<script type='text/javascript'> 
		                                         for(var i=1;i<11;i++){
		                                         	   v=document.getElementById('pourquoi'+i).value;
		                                         	   
		                                              if(v=='$prk'){
		                                                  document.getElementById('pourquoi'+i).setAttribute('checked','checked');
		                                              }
		                                         }
				       	   	   	   	         </script>";
				       	   	   	   		?>   
				       	   	   	   <?php } ?> 	  
				       	   	   	   </tr>
				       	   	   	   <tr>
				       	   	   	   	  <td colspan="3">
				       	   	   	   	    <table>
				       	   	   	   	       <tr>
				       	   	   	   	       	<?php foreach ($entretien_individuel as $ei) { ?>
				       	   	   	   	          <td>
				       	   	   	   	            <b>4. Résumé du problème du client :</b><br><br>
						       	   	   	   	  	<textarea cols="50" rows="20" name="resume" value=""><?php echo $ei['resumeProblemeClient'] ?></textarea>
						       	   	   	   	  </td>
						       	   	   	   	<?php } ?>  
						       	   	   	   	<?php foreach ($reference as $ref) { ?>  
						       	   	   	   	  <td align="center">
						       	   	   	   	  	<b>6. Référence :</b><br><br>
						       	   	   	   	  	<b>6.1-Client(e)référée ?</b><br><br>
						       	   	   	   	  	<input type="radio" name="refere" value="non">1=non<br>
			                                    <input type="radio" name="refere" id="refere1" value="oui" id="refere1">2=oui<br>
		                                        <span id="refere2">
		                                           <input type="text"  name="refere" value="<?php  ?>" placeholder="Préciser"><br><br><br>
		                                           <b>6.2-Structure de Référence:</b><br>
		                                              <input type="text" value="<?php echo $ref['structureReference']; ?>" name=""><br><br><br>
		                                           <b>6.3-Date de Référence :</b><br>
		                                              <input type="date" value="<?php echo $ref['dateReference']; ?>" name=""><br>
		                                        </span>
						       	   	   	   	  </td>
						       	   	   	   	  		<?php
								       	   	   	   	    $cr=$ref["clientReferee"];
								       	   	   	   	    echo"<script type='text/javascript'> 
						                                         for(var i=1;i<3;i++){
						                                         	   v=document.getElementById('refere'+i).value;
						                                         	   
						                                              if(v=='$cr'){
						                                                  document.getElementById('refere'+i).setAttribute('checked','checked');
						                                              }
						                                         }
								       	   	   	   	         </script>";
							       	   	   	   			?>   

						       	   	   	   	<?php } ?>  
						       	   	   	   </tr>
						       	   	   	   <tr>
						       	   	   	   	<?php foreach ($entretien_individuel as $ei) { ?>
						       	   	   	   	  <td>
						       	   	   	   	  	<b>5. Solutions Envisagées :</b><br><br>
						       	   	   	   	  	<textarea name="solutions" cols="50" rows="20"><?php echo $ei['solutionsEnvisagees'] ?></textarea>
						       	   	   	   	  </td>    
						       	   	   	   	  <td>
						       	   	   	   	  	<b>7.Commentaires :</b><br><br>
						       	   	   	   	  	<textarea name="commentaires" cols="50" rows="20"><?php echo $ei['commentaires'] ?></textarea>
						       	   	   	  	 </td>	
						       	   	   	  	<?php } ?>  
						       	   	   	  </tr>	 
				       	   	   	   	    </table>
				       	   	   	   </tr>
				       	   	   </table>
				       	   	</div>   
			            </div>	
		            </div>
		            <span id="spanEI"> </span>
		        </form> 
		   </div>
		   <script type="text/javascript" src="../vue/modifierFiche.js"></script>  
		</body>
		</html> <?php
	}    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
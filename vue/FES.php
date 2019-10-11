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
			</head>
			<body>
					<div class="container col-xs-offset-2">
		       			<form role="form" class="form-horizontal">
			           			 <div class="form-group row">
					                <div class="col-xs-12">
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
								                         <input type="text" id="date" class="form-control" placeholder="Date">
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
									<div class="form-group">
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
			            	 					<td colspan="4">
			            	 						<div  class=" col-xs-6">		
			            	 						 	<input type="text" id="prenom" class="form-control" placeholder="Prenom">
			            	 						</div>
			            	 						<div  class=" col-xs-6">
			            	 						 	<input type="text" id="nom" class="form-control" placeholder="Nom">
			            	 						</div>
			            	 					</td>	  
			            	 				</tr>
			            	 				<tr>
			            	 					<td>
			            	 						<u><strong><label for="sexe" class="control-label">Sexe</label></strong></u></br></br>
			            	 						 <input type="text" id="sexe" class="form-control" placeholder="Sexe">
			            	 					</td>
			    	 							<td>
			        	 							<u><strong><label for="age" class="control-label">Age</label></strong></u></br></br>
			        	 							 <input type="text" id="age" class="form-control" placeholder="Age">
			        	 						</td>	
			        	 						<td>
			        	 							<u><label for="sit_mat" class="control-label petit">Situation Matrimoniale</label></u></br>
			        	 							 <input type="text" id="sit_mat" class="form-control" placeholder="Situation Matrimoniale">
			        	 						</td>
			        	 						<td>			
			        	 							<u><strong><label for="dep" class="control-label">Département</label></strong></u></br></br>
			        	 							 <input type="text" id="dep" class="form-control" placeholder="Département"> 		
			        	 						</td>
			        	 						<td>						
			        	 							<u><strong><label for="ann_etud" class="control-label">Année d’études</label></strong></u></br></br>
			        	 							 <input type="text" id="ann_etud" class="form-control" placeholder="Année d’études">
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
				        	 										<input type="radio" id="bon" class="col-xs-4 col-xs-offset-0" name="etat" placeholder="">
				        	 									 	<input type="radio" id="precaire" class="col-xs-4" name="etat" placeholder="">
				        	 										<input type="radio" id="handicap" class="col-xs-4" name="etat"  placeholder="">
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
			            	 						 	<input type="text" id="adresse" class="form-control" placeholder="Adresse">
			            	 						</td>	
			            	 				</tr>
			            	 				<tr>
			            	 						<td>		            	 						
			            	 					 		<u><strong><label for="telephone" class=" adresse control-label">Téléphone</label></strong></u>
			            	 						</td>
			            	 						<td colspan="2">
			            	 							<div class="row"></div>
			            	 							<div>
			            	 						 		<input type="text" id="telephone" class="form-control" placeholder="Téléphone">
			            	 							</div>
			            	 						</td>
			            	 						<td colspan="2">
			            	 							<div class="row col-xs-offset-2">
			    	 										<u><strong><label for="email" class="control-label">E-mail</label></strong></u>
			    	 						 			</div>
			    	 						 			<div>
			            	 						 		<input type="text" id="email" class="form-control" placeholder="E-mail">
			            	 							</div>
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
					            	 					<textarea cols="50" rows="12"></textarea>
					            	 				</td>
				            					</tr>
				            					<tr>
				            						<td>
					            	 					<u><strong>Habitat</strong></u>
					            	 				</td>
					            	 				<td colspan="4">		
					            	 					<textarea cols="50" rows="12"></textarea>
					            	 				</td>
				            					</tr>
				            					<tr>
				            						<td>
					            	 					<u><strong>Dynamique familiale et environnementale</strong></u>
					            	 				</td>
					            	 				<td colspan="4">		
					            	 					<textarea cols="50" rows="12"></textarea>
					            	 				</td>
				            					</tr>
				            			</table>
				            		</div>			
						</form>		
					</div>		
			<script type="text/javascript" src="dist/js/jquery.js"></script>

			<script type="text/javascript">
					jQuery(function($){
						alert("jquery est prêt!");
						// console.log("jquery est prêt!");
					});

				</script>
				
				<!--<script>
					jQuery(document).ready(function(){
						alert("jquery est prêt!");
					});
				</script>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  hebergér jquery directement car elle ne va pas trop faire bosser le serveur inutilement-->
			</body>
		</html><?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
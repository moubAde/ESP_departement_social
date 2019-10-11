<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		  <title>Bootstrap Example</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="../dist/css/bootstrap.css">
		  <link rel="stylesheet" type="text/css" href="../dist/css/acceuil_operation.css">
		</head>
		<body>
			<div class="row">
				<div class="col-xs-11"></div>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><abbr title="modifier vos paramètres"> <span class="glyphicon glyphicon-cog"/> </abbr></button>
			</div>
			<div class="container" id="acceuil_operation">
					<div class="jumbotron">
							<h1>
								Bienvenue sur notre Application de gestion d'assistance sociale
							</h1>	

							<p>choisissez un etudiant pour consulter,modifier ou supprimer ses informations ou créer un étudiant en cliquant sur <a href="../controle/accordion_controleur.php" target="parent">Creer un étudiant</a> </p>

					</div>

			</div>

			<div class="container">
			  <!-- Trigger the modal with a button -->

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Modifier vos informations personnelles</h4>
			        </div>
			        <form action="../controle/changerInfo.php" method="POST">
				        <div class="modal-body">
				         <div class="row">
				         	<div class="col-xs-5">
				          		<label for="login">Login</label>
				          	</div>	
				          	<input id="login" type="text" name="login">	
				         </div></br> 
				         <div class="row">
				         	<div class="col-xs-5">
				         	 <label for="nom">Nom</label>
				         	</div>
				          <input id="nom" type="text" name="nom">
				         </div></br> 
				         <div class="row">
				         	<div class="col-xs-5">
				         	 <label for="prenom">Prenom</label>
				         	</div> 
				          <input id="prenom" type="text" name="prenom">
				         </div></br> 
				         <div class="row">
				         	<div class="col-xs-5">
				         	 <label for="nouveau">Donnez votre nouveau mot de passe</label>
				         	</div> 
				         <input id="nouveau" type="text" name="nouveauMDP">
				         </div></br> 
				         <div class="row"> 
				         	<div class="col-xs-5">
				         	 <label for="ancien">Donnez votre ancien mot de passe</label>
				         	</div> 
				          <input id="ancien" type="text" name="ancienMDP">
				         </div></br> 
				         <div class="row"> 
				         	<div class="col-xs-5">
				         	</div> 
				         	 <input id="validation" type="submit" name="validerInfo" class="btn btn-success">
				        </div>
				       </div> 
			        </form>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<script src="../dist/js/jquery.js"></script>
		  	<script src="../dist/js/bootstrap.min.js"></script>
		</body>	
		</html><?php
	}    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
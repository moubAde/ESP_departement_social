<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
		<div class="modal fade" id="ajouterdos" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Ajouter Un Fichier pour une intervention </h4>
			        </div>
			        <div class="modal-body">

			        	<form action="modifierIntervention.php" method="POST" enctype="multipart/form-data">
			        		<label for="fichier">
			        			<abbr title="choisissez le fichier"><span class="glyphicon glyphicon-paperclip btn-lg"></span></abbr>
			        		</label>
			        		<input type="text" name="idDossierAjout"  required> 
			        		<input type="file" id="fichier" class="btn btn-danger" name="newFileDossierAjout"> <br>
			        		<label for="description">
			        			Description
			        		</label><br>
			        		<textarea cols="60" rows="6" name="newDescriptionDossierAjout"></textarea><br> 
			        		<input type="reset" name="annuler" class="btn btn-danger"> 
			        		<input type="submit" name="validerNewDossierAjout" class="btn btn-success"> 
			        		<input type="hidden" value="<?php echo $dossier;?>" name="hiddenidEtuDossierAjout">
			        	</form>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			    </div>
		</div> <?php
   }    
   else{
        echo "veuillez vous connecter";
        header("location:../../index.php");
   }    
?>
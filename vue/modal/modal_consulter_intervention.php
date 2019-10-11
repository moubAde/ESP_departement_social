<?php
	// $idJustificatif=$_GET['idjus'];
 //  	$tab=recupererJustificatif($connexion,'piece_justificative',$piecej['idEtu'],$idJustificatif);
  	// echo "monid=$idJustificatif";
 ?>
 <?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
		<div class="modal fade" id="i<?php echo $inter['idDossier']?>" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><?php echo $inter['nomFichier']; ?></h4>
					        
			        </div>
			        <div class="modal-body">
			          <label for="description">Description</label><br><textarea cols="60" rows="6" disabled><?php echo $inter['description']; ?></textarea></br>
			           <object type="text/html" data="../intervention/<?php echo $inter['nomFichier']; ?>" width="100%" height="100%"></object>
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
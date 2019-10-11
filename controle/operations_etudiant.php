<?php 
    ini_set("display_errors",0);error_reporting(0);
    session_start();
    //echo $_SESSION['login'].' '.$_SESSION['password'];
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){
		 $id=$_GET['id'];
		 include(dirname(__FILE__).'/../modele/modele.php');
		 include(dirname(__FILE__).'/../modele/connexion.php');
		 /*table de l'entretien individuel*/
		 $entretien_individuel=recupererEtudiant($connexion,'entretien_individuel',$id);
		 $etudiant=recupererEtudiant($connexion,'etudiant',$id);
		 $donnees_socio_demographiques=recupererEtudiant($connexion,'donnees_socio_demographiques',$id);
		 $approche_comportementale=recupererEtudiant($connexion,'approche_comportementale',$id);
		 $reference=recupererEtudiant($connexion,'reference',$id);
			// echo '<pre>';
			// print_r($entretien_individuel);
			// echo '</pre>';
		 /*table de l'enquete social*/
		 $diagnostic_social=recupererEtudiant($connexion,'diagnostic_social',$id);
		 $enquete_sociale=recupererEtudiant($connexion,'enquete_sociale',$id);
		 $identification_client=recupererEtudiant($connexion,'identification_client',$id);
		 $situation_socio_economique=recupererEtudiant($connexion,'situation_socio_economique',$id);
		 $suivi=recupererEtudiant($connexion,'suivi',$id);
		 
		 /*table des pièces justificatives*/
		 $piece_justificative=recupererEtudiant($connexion,'piece_justificative',$id);
		 
		 /*table des interventions*/
		 $intervention=recupererEtudiant($connexion,'intervention',$id);

		  include(dirname(__FILE__).'/../vue/operations.php');
		 // else{
		 // 	echo("erreur");
		 // }
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    } 
?>
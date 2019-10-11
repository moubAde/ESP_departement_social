<?php
    ini_set("display_errors",0);error_reporting(0);
    session_start();
    //echo $_SESSION['login'].' '.$_SESSION['password'];
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){
		if(isset($_POST['validerInfo'])){
		include(dirname(__FILE__).'/../modele/modele.php');
	    include(dirname(__FILE__).'/../modele/connexion.php');
	    
	    	$login=$_POST["login"];
		
			$nom=$_POST["nom"];
			  
			$prenom=$_POST["prenom"];
		
			$ancienMDP=$_POST["ancienMDP"];
			$nouveauMDP=$_POST["nouveauMDP"];

			$infoAssistant=recuperer($connexion,'assistant_social');
			// echo "$login et $nom et $prenom et $ancienMDP et $nouveauMDP ";
			foreach ($infoAssistant as $inf) {
				$ancienMDPBDD=$inf['password'];
			}
			
			if ($ancienMDP==$ancienMDPBDD) {
				# code...
			
			modifier1($connexion,'assistant_social','password',$ancienMDP,'nom',$nom);
			modifier1($connexion,'assistant_social','password',$ancienMDP,'prenom',$prenom);
			modifier3($connexion,'assistant_social','password',$ancienMDP,'login',$login,'password',$nouveauMDP);

			// modifier2($connexion,'assistant_social','login',$login,'password',$ancienMDP,'password',$nouveauMDP);
			// modifier2($connexion,'assistant_social','login',$login,'password',$ancienMDP,'login',$login);
			echo " update reussi";

			}	
			header('location:../vue/acceuil_operation.php');
		}
	}    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }
?>
<?php
    ini_set("display_errors",0);error_reporting(0);
    session_start();
    //echo $_SESSION['login'].' '.$_SESSION['password'];
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){
		include(dirname(__FILE__).'/../modele/connexion.php');
		include(dirname(__FILE__).'/../modele/modele.php');
		$nomTable='etudiant';
		$etudiants=recuperer($connexion,$nomTable);
		// echo '<pre>';
		// print_r($etudiants);
		// echo '</pre>';
		include(dirname(__FILE__).'/../vue/liste_etudiant.php');
	}    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }
?>
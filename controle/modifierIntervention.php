<?php 
   ini_set("display_errors",0);error_reporting(0);
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){
       include(dirname(__FILE__).'/../modele/modele.php');
       include(dirname(__FILE__).'/../modele/connexion.php');

       if(isset($_POST['validerNewIntervention'])){
          $nomFichier=$_FILES['newFileIntervention']['name'];
          $description=$_POST['newDescriptionIntervention'];
          $idDossier=$_POST['hiddenidIntervention'];
          $idEtu=$_POST['hiddenidEtuIntervention'];
          echo "$nomFichier   $description  $idEtu  $idDossier";
         if(move_uploaded_file($_FILES['newFileIntervention']['tmp_name'],"../intervention/$nomFichier")){
                echo "<br>upload reussi<br>";
                modifier2($connexion," intervention","idDossier",$idDossier,"idEtu",$idEtu,"nomFichier","$nomFichier");
                modifier2($connexion," intervention","idDossier",$idDossier,"idEtu",$idEtu,"description","$description");
                header("location:operations_etudiant.php?id=$idEtu");
          }
          else{
                echo "<br>Problème lors de l\'upload !<br>";
          }
       }

       if(isset($_GET['var'])){
         	$idEtu=$_GET['var'];
       		$idDossier=$_GET['var1'];
            echo "$idEtu et $idDossier"; 
         	supprimer2($connexion," intervention","idDossier",$idDossier,"idEtu",$idEtu);
         	header("location:operations_etudiant.php?id=$idEtu");
       }

       if(isset($_POST['validerNewDossierAjout'])){
       		$nomFichier=$_FILES['newFileDossierAjout']['name'];
    	    $description=$_POST['newDescriptionDossierAjout'];
    	    $idDossier=$_POST['idDossierAjout'];
    	    $idEtu=$_POST['hiddenidEtuDossierAjout'];
    	    echo "$nomFichier   $description  $idEtu  $idDossier";
    	    if(move_uploaded_file($_FILES['newFileDossierAjout']['tmp_name'],"../intervention/$nomFichier")){
                echo "<br>upload reussi<br>";
                insererIntervention($connexion,$idDossier,$idEtu,$nomFichier,$description);
                header("location:operations_etudiant.php?id=$idEtu");
          }
          else{
                echo "<br>Problème lors de l\'upload !<br>";
          }
    	 } 
  }    
  else{
        echo "veuillez vous connecter";
        header("location:../index.php");
  }  
?>	 
<?php 
   ini_set("display_errors",0);error_reporting(0);
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){
       include(dirname(__FILE__).'/../modele/modele.php');
       include(dirname(__FILE__).'/../modele/connexion.php');

       if(isset($_POST['validerNewJustificatif'])){
          $nom=$_FILES['newFile']['name'];
          $description=$_POST['newDescription'];
          $idJustificatif=$_POST['hiddenidJustificatif'];
          $idEtu=$_POST['hiddenidEtu'];
          echo "$nom   $description  $idEtu  $idJustificatif";
          if(move_uploaded_file($_FILES['newFile']['tmp_name'],"../justificatif/$nom")){
                echo "<br>upload reussi<br>";
                modifier2($connexion,"piece_justificative","idJustificatif",$idJustificatif,"idEtu",$idEtu,"nomJustificatif","$nom");
                modifier2($connexion,"piece_justificative","idJustificatif",$idJustificatif,"idEtu",$idEtu,"description","$description");
                header("location:operations_etudiant.php?id=$idEtu");
          }
          else{
                echo "<br>Problème lors de l\'upload !<br>";
          }
       }

       if(isset($_GET['var'])){
         	$idEtu=$_GET['var'];
       		$idJustificatif=$_GET['var1'];
            echo "$idEtu et $idJustificatif"; 
         	supprimer2($connexion,"piece_justificative","idJustificatif",$idJustificatif,"idEtu",$idEtu);
         	header("location:operations_etudiant.php?id=$idEtu");
       }

       if(isset($_POST['validerNewJustificatifAjout'])){
       		$nom=$_FILES['newFileAjout']['name'];
    	    $description=$_POST['newDescriptionAjout'];
    	    $idJustificatif=$_POST['idJustificatifAjout'];
    	    $idEtu=$_POST['hiddenidEtuAjout'];
    	    //echo "$nom   $description  $idEtu  $idJustificatif";
    	    if(move_uploaded_file($_FILES['newFileAjout']['tmp_name'],"../justificatif/$nom")){
                echo "<br>upload reussi<br>";
                insererJustificatif($connexion,$idJustificatif,$idEtu,$nom,$description);
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
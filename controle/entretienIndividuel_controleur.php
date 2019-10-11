<?php 
       ini_set("display_errors",0);error_reporting(0);
       session_start();
       //echo $_SESSION['login'].' '.$_SESSION['password'];
       if (isset($_SESSION['login']) && isset($_SESSION['password'])){
           if(isset($_POST['validerEI'])){
                  include(dirname(__FILE__).'/../modele/modele.php');
                  include(dirname(__FILE__).'/../modele/connexion.php');
                  $idEtu=$_POST['idEtu'];
                 	$structure=$_POST['structure'];
                 	$anneeSc=$_POST['anneeSc'];
                 	$numOF=$_POST['numOF'];
                 	$dateSc=$_POST['dateSc'];
                 	$prenom=$_POST['prenom'];  //////////////////
                 	$nom=$_POST['nom'];        //////////////////
                 	$genre=$_POST['genre'];
                 	$situationMatrimonialeClient=$_POST['situationMatrimonialeClient'];
                 	$localite=$_POST['localite'];
                 	$tel=$_POST['Tel'];
                 	$pays=$_POST['pays'];
                 	$age=$_POST['age'];
                 	$activiteProfessionnelle=$_POST['activiteProfessionnelle'];
                 	$niveau=$_POST['niveau'];
                 	$venu=$_POST['venu'];
                  if ($venu=="non") {
                     $adresse=$_POST['adresse'];
                  }
                 	else{
                     $adresse="";
                  }
                 	$pourquoi=$_POST['pourquoi'];
                 	$resume=$_POST['resume'];
                 	$refere=$_POST['refere'];
                 	$solutions=$_POST['solutions'];
                 	$commentaires=$_POST['commentaires'];
                  if ($pays=="Autre") {              /**************************************************/
                       $pays2=$_POST['autrePays'];
                       $lieuResidence="$localite-$telEI-$pays2"; 
                  }
                  else{
                       $lieuResidence="$localite-$telEI-$pays"; 
                  }
                  if ($_POST['avecQui']=="Autre") { ///////////////////////////////////////////////////////
                         $avecQui=$_POST['autreAvecQui'];
                  }
                  else{
                         $avecQui=$_POST['avecQui'];
                  }

           	      echo "$structure $anneeSc $numOF $genre $situationMatrimonialeClient $tel";
                  //mise a jour de entretien individuel
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"structure",$structure);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"anneeScolaire",$anneeSc);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"numOrdFiche",$numOF);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"date",$dateSc);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"commentaires",$commentaires);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"solutionsEnvisagees",$solutions);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"resumeProblemeClient",$resume);
                  modifier1($connexion,"entretien_individuel","idEtu",$idEtu,"donneesSocioEducatives",$niveau);

                  //mise a jour des données socio-démographique
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"sexeClient",$genre);
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"ageClient",$age);
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"situationMatrimonialeClient",$situationMatrimonialeClient);
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"activiteProfesionnelle",$activiteProfessionnelle);
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"lieuResidence",$lieuResidence);
                  modifier1($connexion,"donnees_socio_demographiques","idEtu",$idEtu,"avecQui",$avecqui);

                  //mise a jour d'approche comportemetal
                  modifier1($connexion,"approche_comportementale","idEtu",$idEtu,"clientVenuM",$venu);
                  modifier1($connexion,"approche_comportementale","idEtu",$idEtu,"clientVenuA",$adresse);
                  modifier1($connexion,"approche_comportementale","idEtu",$idEtu,"pourquoi",$pourquoi);

                  //mise a jour reference
                  modifier1($connexion,"reference","idEtu",$idEtu,"clientReferee",$venu);
                  modifier1($connexion,"reference","idEtu",$idEtu,"structureReference",$adresse);
                  modifier1($connexion,"reference","idEtu",$idEtu,"date",$pourquoi);
           }
       }    
       else{
           echo "veuillez vous connecter";
           header("location:../index.php");
       }
?>
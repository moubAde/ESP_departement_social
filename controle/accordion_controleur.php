<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){
       include(dirname(__FILE__).'/../vue/accordion.php'); 
       if(isset($_POST['valider'])){
       	    include(dirname(__FILE__).'/../modele/modele.php');
            include(dirname(__FILE__).'/../modele/connexion.php');
       	    //cas
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
       	    $tel=$_POST['tel'];
       	    $idEtu=$_POST['idEtu'];
       	    insererEtudiant($connexion,$nom,$prenom,$idEtu,$tel);
            
       	    //justificatif        
            $nbrJustificatif=$_POST['hiddenJustificatif'];
            for ($i=0; $i <$nbrJustificatif; $i++) {
                $idJustificatif=$_POST["idJustificatif$i"];
                $descriptionJustificatif=$_POST["descriptionJustificatif$i"];
                $nomJustificatif=$_FILES['fichier']['name'][$i];
                //echo "$idJustificatif   $descriptionJustificatif   nom=$nomJustificatif<br>";
                if(move_uploaded_file($_FILES['fichier']['tmp_name'][$i], "../justificatif/$nomJustificatif")){
                      echo "<br>upload reussi $i<br>";
                      insererJustificatif($connexion,$idJustificatif,$idEtu,$nomJustificatif,$descriptionJustificatif);
                }
                else{
                      //echo "<br>Problème lors de l\'upload !<br>";
                }  
            }
            //echo "fin just <br>";

            //intervention
            $nbrIntervention=$_POST['hiddenIntervention'];
            //echo "nbr2=$nbrIntervention<br>";
            //echo "nbr1=$nbrJustificatif<br>";
            $nbrT=$nbrIntervention+$nbrJustificatif;
            //echo "nbrT=$nbrT<br>";
            for ($i=$nbrJustificatif ; $i <$nbrT; $i++) {
                $u=$i-$nbrJustificatif;
                $idDossier=$_POST["idDossier$u"];
                $nomIntervention=$_FILES['fichier']['name'][$i];
                $description=$_POST["descriptionIntervention$u"];
                //echo "$idDossier    nom=$nomIntervention   $description<br>";
                if(move_uploaded_file($_FILES['fichier']['tmp_name'][$i], "../intervention/$nomIntervention")){
                      echo "<br> upload reussi $i <br>";
                      insererIntervention($connexion,$idDossier,$idEtu,$nomIntervention,$description);
                }
                else{
                      //echo "<br>Problème lors de l\'upload 2 !<br>";
                }
            }        
            //echo "fin inter<br>";

            //entretien
            $donneeSocioEtucative=$_POST['niveau'];    
            $resumeProblemeClient=$_POST['resumeProblemeClient'];
            $solutionEnvisagees=$_POST['solutionEnvisagees'];  
            $commentaire=$_POST['commentaire'];
            $structure=$_POST['structureEI'];
            $anneeScolaire=$_POST['anneeScolaireEI'];
            $numOrdFiche=$_POST['numOrdFicheEI'];
            $date=$_POST['dateEI'];  
            @insererEntretien($connexion,$idEtu,$donneeSocioEtucative,$resumeProblemeClient,$solutionEnvisagees,$commentaire,$structure,$anneeScolaire,$numOrdFiche,$date);

            //données socio demographique    
            $sexeClient=$_POST['sexeClient'];
            $ageClient=$_POST['ageClient'];  
            $situationMatrimonialeClient=$_POST['situationMatrimonialeClient'];
            $activiteProfessionnelle=$_POST['activiteProfessionnelle'];
            $localite=$_POST['localite'];
            $telEI=$_POST['telEI'];
            $pays=$_POST['pays'];
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
              
            @insererDonneesSocioDemographiques($connexion,$idEtu,$sexeClient,$ageClient,$situationMatrimonialeClient,$activiteProfessionnelle,$lieuResidence,$avecQui);
         
            //approche comportementale     
            $clientVenuM=$_POST['venu'];
            $clientVenuA='';
            if (isset($_POST['VenuA'])) {   /******************************************************/
               $clientVenuA=$_POST['VenuA']; /******************************************************/
               echo "$clientVenuA";
            }
            $pourquoi=$_POST['pourquoi'];
            echo "<br> $pourquoi";     
            @insererApprocheComportementale($connexion,$idEtu,$clientVenuM,$clientVenuA,$pourquoi);

            //reference
            $clientReferee=$_POST['refere'];
            $structureReference=$_POST['structureRef'];  
            $dateReference=$_POST['dateRef'];
            @insererReference($connexion,$idEtu,$clientReferee,$structureReference,$dateReference);

            //insererEnqueteSociale    
            $structure=$_POST['structureEI'];
            $anneeScolaire=$_POST['anneeScolaireEI'];
            $numOrdFiche=$_POST['numOrdFicheEI'];  
            $date=$_POST['dateEI'];
            @insererEnqueteSociale($connexion,$idEtu,$structure,$anneeScolaire,$numOrdFiche,$date);

            //insererDiagnosticSocial
            $problemeCentraleClientProposition=$_POST['problemeCentraleClientProposition'];
            @insererDiagnosticSocial($connexion,$idEtu,$problemeCentraleClientProposition);
            
            //insererSituationSocioEconomique    
            $compositionSituationFamille=$_POST['compositionSituationFamille'];
            $habitat=$_POST["habitat"];
            $dynamiqeFamilialeEnvironnementale=$_POST["dynamiqeFamilialeEnvironnementale"];  
            $situationProblemeClient=$_POST["situationProblemeClient"];
            @insererSituationSocioEconomique($connexion,$idEtu,$compositionSituationFamille,$habitat,$dynamiqeFamilialeEnvironnementale,$situationProblemeClient);

            //insererIdentificationClient    
            $nomClient=$nom;
            $prenomClient=$prenom;
            $ageClient=$_POST['ageES'];  
            $sexeClient=$_POST['sexeClientES'];
            $situationMatrimonialeClient=$_POST['situationMatrimonialeES'];    
            $departement=$_POST['departement'];
            $anneeEtude=$_POST['anneeEtudeES'];
            $etat1=$_POST['etat'];
            if (isset($_POST['lequel_etat'])) {
               $etat2=$_POST['lequel_etat'];    
            }
            else{
               $etat2=" ";
            }
            $etatSante="$etat1-$etat2";  
            $adresse=$_POST['adresse'];    
            $email=$_POST['email'];
            @insererIdentificationClient($connexion,$idEtu,$nomClient,$prenomClient,$ageClient,$sexeClient,$situationMatrimonialeClient,$departement,$anneeEtude,$etatSante,$adresse,$tel,$email);
        
            //insererSuivi    
            $nbrSuivi=$_POST['hiddenSuivi'];
            for ($i=0; $i <$nbrSuivi ; $i++) { 
                $date=$_POST["date$i"];
                $natureDemande=$_POST["natureDemande$i"];
                $actionEffectuee=$_POST["actionEffectuee$i"];  
                $observation=$_POST["observation$i"];
                @insererSuivi($connexion,$idEtu,$date,$natureDemande,$actionEffectuee,$observation);
            }
            
       }
    }
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
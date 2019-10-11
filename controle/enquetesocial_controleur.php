<?php 
       ini_set("display_errors",0);error_reporting(0);
       session_start();
       //echo $_SESSION['login'].' '.$_SESSION['password'];
       if (isset($_SESSION['login']) && isset($_SESSION['password'])){
           if(isset($_POST['validerES'])){
                include(dirname(__FILE__).'/../modele/modele.php');
                include(dirname(__FILE__).'/../modele/connexion.php');
                $idEtu=$_POST['idEtu'];
                $structureES=$_POST['structureES'];
                $anneeScES=$_POST['anneeScES'];
                $numOrdFicheES=$_POST['numOrdFicheES'];
                $dateScES=$_POST['dateScES'];
                $prenomES=$_POST['prenomES'];
                $nomES=$_POST['nomES'];
                $sexeES=$_POST['sexeES'];
                $ageES=$_POST['ageES'];
                $situationMatrimonialeClient=$_POST['situationES'];
                $departementES=$_POST['departementES'];
                $ann_etud=$_POST['ann_etudES'];
                $etat=$_POST['etat'];
                if ($etat!="BON") {
                    $etat2=$_POST['lequel_etat'];
                    $etat.="-$etat2";
                }
                else{
                    $etat2="";
                    $etat.="-$etat2";
                }
                $email=$_POST['emailES'];
                $adresseES=$_POST['adresseES'];
                $telephoneES=$_POST['telephoneES'];
                $compositionSituationFamille=$_POST['compositionSituationFamille'];
                $habitat=$_POST['habitat'];
                $dynamiqueFamilialeEnvironnementale=$_POST['dynamiqueFamilialeEnvironnementale'];
                $situationProblemeClient=$_POST['situationProblemeClient'];
                $problemeCentraleClientPropositions=$_POST['problemeCentraleClientPropositions'];

                //mise a jour de entretien individuel
                modifier1($connexion,"enquete_sociale","idEtu",$idEtu,"structure",$structureES);
                modifier1($connexion,"enquete_sociale","idEtu",$idEtu,"anneeScolaire",$anneeScES);
                modifier1($connexion,"enquete_sociale","idEtu",$idEtu,"numOrdFiche",$numOrdFicheES);
                modifier1($connexion,"enquete_sociale","idEtu",$idEtu,"date",$dateScES);

                //mise a jour de situation socio economique
                modifier1($connexion,"situation_socio_economique","idEtu",$idEtu,"compositionSituationFamille",$compositionSituationFamille);
                modifier1($connexion,"situation_socio_economique","idEtu",$idEtu,"habitat",$habitat);
                modifier1($connexion,"situation_socio_economique","idEtu",$idEtu,"dynamiqueFamilialeEnvironnementale",$dynamiqueFamilialeEnvironnementale);
                modifier1($connexion,"situation_socio_economique","idEtu",$idEtu,"situationProblemeClient",$situationProblemeClient);

                //mise a jour de diagnostic_sociale
                modifier1($connexion,"diagnostic_social","idEtu",$idEtu,"problemeCentraleClientPropositions",$problemeCentraleClientPropositions);

                //mise a jour de identification client
                modifier1($connexion,"identification_client","idEtu",$idEtu,"nomClient",$nomES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"prenomClient",$prenomES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"ageClient",$ageES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"sexeClient",$sexeES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"situationMatrimonialeClient",$situationMatrimonialeClient);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"departement",$departementES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"anneeEtude",$ann_etud);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"adresse",$adresseES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"etatSante",$etat);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"tel",$telephoneES);
                modifier1($connexion,"identification_client","idEtu",$idEtu,"email",$email);
                
                //mise a jour de suivi
                $nbrSuivi=$_POST['hiddenSuivi'];
                supprimer1($connexion,"suivi",$idEtu,$idEtu);
                for ($i=0; $i <$nbrSuivi ; $i++) { 
                    $date=$_POST["date$i"];
                    $natureDemande=$_POST["natureDemande$i"];
                    $actionEffectuee=$_POST["actionEffectuee$i"];  
                    $observation=$_POST["observation$i"];
                    insererSuivi($connexion,$idEtu,$date,$natureDemande,$actionEffectuee,$observation);
                }

            }
           else{
             echo("non récupéré");
            }
        }    
        else{
            echo "veuillez vous connecter";
            header("location:../index.php");
        }
?>
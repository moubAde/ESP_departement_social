<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){
        //inserer les infos dans la base de données
        function insererEtudiant($connexion,$nom,$prenom,$idEtu,$tel) { 
            $req =$connexion -> query("INSERT INTO etudiant VALUES ('$nom','$prenom','$idEtu','$tel')");
        }

        function insererJustificatif($connexion,$idJustificatif,$idEtu,$nomJustificatif,$description) { 
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req =$connexion -> query("INSERT INTO piece_justificative VALUES ('$idJustificatif','$idEtu','$nomJustificatif','$description')");
        }

        function insererIntervention($connexion,$idDossier,$idEtu,$nomFichier,$description) { 
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req =$connexion -> query("INSERT INTO intervention VALUES ('$idDossier','$idEtu','$nomFichier','$description')");
        }

        function insererEntretien($connexion,$idEtu,$donneeSocioEtucative,$resumeProblemeClient,$solutionEnvisagees,$commentaire,$structure,$anneeScolaire,$numOrdFiche,$date) { 
            $req =$connexion -> query("INSERT INTO entretien_individuel VALUES ('$idEtu','$donneeSocioEtucative','$resumeProblemeClient','$solutionEnvisagees','$commentaire','$structure','$anneeScolaire','$numOrdFiche','$date')");
        }

        function insererDonneesSocioDemographiques($connexion,$idEtu,$sexeClient,$ageClient,$situationMatrimoleClient,$activiteProfessionnelle,$lieuResidence,$avecQui) { 
            $req =$connexion -> query("INSERT INTO donnees_socio_demographiques VALUES ('$idEtu','$sexeClient','$ageClient','$situationMatrimoleClient','$activiteProfessionnelle','$lieuResidence','$avecQui')");
            if (empty($req)) {
                echo "non conform";
            }
        }

        function insererApprocheComportementale($connexion,$idEtu,$clientVenuM,$clientVenuA,$pourquoi) { 
            $req =$connexion -> query("INSERT INTO approche_comportementale VALUES ('$idEtu','$clientVenuM','$clientVenuA','$pourquoi')");
        }

        function insererReference($connexion,$idEtu,$clientReferee,$structureReference,$dateReference) { 
            $req =$connexion -> query("INSERT INTO reference VALUES ('$idEtu','$clientReferee','$structureReference','$dateReference')");
        }

        function insererEnqueteSociale($connexion,$idEtu,$structure,$anneeScolaire,$numOrdFiche,$date) { 
            $req =$connexion -> query("INSERT INTO enquete_sociale VALUES ('$idEtu','$structure','$anneeScolaire','$numOrdFiche','$date')");
        }

        function insererDiagnosticSocial($connexion,$idEtu,$problemeCentraleClientProposition) { 
            $req =$connexion -> query("INSERT INTO diagnostic_social VALUES ('$idEtu','$problemeCentraleClientProposition')");
        }

        function insererSituationSocioEconomique($connexion,$idEtu,$compositionSituationFamille,$habitat,$dynamiqeFamilialeEnvironnementale,$situationProblemeClient) { 
            $req =$connexion -> query("INSERT INTO situation_socio_economique VALUES ('$idEtu','$compositionSituationFamille','$habitat','$dynamiqeFamilialeEnvironnementale','$situationProblemeClient')");
        }

        function insererSuivi($connexion,$idEtu,$date,$natureDemande,$actionEffectuee,$observation) { 
            $req =$connexion -> query("INSERT INTO suivi VALUES ('$idEtu','$date','$natureDemande','$actionEffectuee','$observation')");
        }

        function insererIdentificationClient($connexion,$idEtu,$nomClient,$prenomClient,$ageClient,$sexeClient,$situationMatrimoleClient,$departement,$anneeEtude,$etatSante,$adresse,$tel,$email) { 
            $req =$connexion -> query("INSERT INTO identification_client VALUES ('$idEtu','$nomClient','$prenomClient','$ageClient','$sexeClient','$situationMatrimoleClient','$departement','$anneeEtude','$etatSante','$adresse','$tel','$email')");
        }
        
        //recuperer les informations de la base de données
        function recuperer($connexion,$nomTable) {
            $news = array();         
    		$req = $connexion -> query("SELECT * FROM $nomTable");
            while ($data = $req -> fetch()){                
            	$news[] = $data;
            }
            return $news; 
        }
        
        //modifier les informations d'une table possedant 1e cle primaire
        function modifier1($connexion,$nomTable,$nomClePrimaire,$valeurClePrimaire,$nomChampAModifier,$ValeurChampAModifier) { 
            $req =$connexion -> query("UPDATE $nomTable SET $nomChampAModifier = '$ValeurChampAModifier' WHERE $nomClePrimaire = '$valeurClePrimaire'");
        }

        //modifier les informations d'une table possedant 2 cle primaire
        function modifier2($connexion,$nomTable,$nomClePrimaire1,$valeurClePrimaire1,$nomClePrimaire2,$valeurClePrimaire2,$nomChampAModifier,$ValeurChampAModifier) { 
            $req =$connexion -> query("UPDATE $nomTable SET $nomChampAModifier = '$ValeurChampAModifier' WHERE $nomClePrimaire1 = '$valeurClePrimaire1' and $nomClePrimaire2 = '$valeurClePrimaire2' ");
        }

        function modifier3($connexion,$nomTable,$nomClePrimaire1,$valeurClePrimaire1,$nomChampAModifier1,$ValeurChampAModifier1,$nomChampAModifier2,$ValeurChampAModifier2) { 
            $req =$connexion -> query("UPDATE $nomTable SET $nomChampAModifier1 = '$ValeurChampAModifier1',$nomChampAModifier2 = '$ValeurChampAModifier2' WHERE $nomClePrimaire1 = '$valeurClePrimaire1'");
        }


        //DELETE FROM `assistance_sociale`.`etudiant` WHERE `etudiant`.`idEtu` = \'contr\'*/
        //Supprimer les informations d'une table possedant 1e cle primaire
        function supprimer1($connexion,$nomTable,$nomClePrimaire,$valeurClePrimaire) { 
            $req =$connexion -> query("DELETE FROM $nomTable WHERE $nomClePrimaire = '$valeurClePrimaire'");
        }

        //Supprimer les informations d'une table possedant 2 cle primaire
        function supprimer2($connexion,$nomTable,$nomClePrimaire1,$valeurClePrimaire1,$nomClePrimaire2,$valeurClePrimaire2) { 
            $req =$connexion -> query("DELETE FROM $nomTable WHERE $nomClePrimaire1 = '$valeurClePrimaire1' and $nomClePrimaire2 = '$valeurClePrimaire2' ");
        }

        
        function recupererEtudiant($connexion,$nomTable,$id){
            $news = array();         
            $req = $connexion -> query("SELECT * FROM $nomTable WHERE idEtu='$id'");
            while ($data = $req -> fetch()){                
                $news[] = $data;
            }
            return $news; 
        }
        // function recupererJustificatif($connexion,$nomTable,$id,$idJustificatif){
        //     $news = array();         
        //     $req = $connexion -> query("SELECT * FROM $nomTable WHERE idJustificatif='$idJustificatif' ");
        //     while ($data = $req -> fetch()){                
        //         $news[] = $data;
        //     }
        //     return $news;
        // }
        // function recupererIntervention($connexion,$nomTable,$id,$idDossier){
        //     $news = array();         
        //     $req = $connexion -> query("SELECT * FROM $nomTable WHERE idDossier='$idDossier' ");
        //     while ($data = $req -> fetch()){                
        //         $news[] = $data;
        //     }
        //     return $news;
        // }
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>

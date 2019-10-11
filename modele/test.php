<?php /*
     //fichier  pour le test des fonctions
     
    include(dirname(__FILE__).'\connexion.php');
    include(dirname(__FILE__).'\modele.php');
    //recuperer
    /*$etudiants = recuperer($connexion,"approche_comportementale");?>
    <table class="table table-striped table-bordered table-hover">
                   <thead>
                      <tr>
                         <th>Prenom</th>
                         <th>DDN</th>
                         <th>LDN</th>
                         <th>Notes</th>
                      </tr>
                   </thead>
                   <tbody>
                      <?php 
                           foreach($etudiants as $etu) {
                              echo '<tr>';        
                                      echo '
                                      <th>'.$etu['idEtu'].'</th>
                                      <th>'.$etu['clientVenuM'].'</th>
                                      <th>'.$etu['clientVenuA'].'</th>
                                      <th>'.$etu['pourquoi'].'</th>
                                      <th>';
                                      
                                      echo "</th>";
                              echo "</tr>";
                           }
                      ?>     
                   </tbody>
               </table><?php*/
     
    //insererEtudiant
    $nom="ademoub";
    $prenom="mohamed";
    $idEtu="sn96";
    $tel="771568104";           
    insererEtudiant($connexion,$nom,$prenom,$idEtu,$tel);

    //insererJustificatif
    /*$idJustificatif="id96";
    $idEtu="sn96";
    $nomJustificatif="contra";
    $description="771568104";           
    insererJustificatif($connexion,$idJustificatif,$idEtu,$nomJustificatif,$description);*/

    //insererIntervention
    /*$idDossier="id96";
    $idEtu="sn96";
    $nomFichier="contra";
    $description="771568104";           
    insererIntervention($connexion,$idDossier,$idEtu,$nomFichier,$description);*/

    //insererEntretien
    /*$idEtu="sn96";
    $donneeSocioEtucative="id96";    
    $resumeProblemeClient="contra";
    $solutionEnvisagees="771568104";  
    $commentaire="id96";
    $structure="sn96";
    $anneeScolaire="contra";
    $numOrdFiche="771568104";
    $date="1996-11-07";  
    insererEntretien($connexion,$idEtu,$donneeSocioEtucative,$resumeProblemeClient,$solutionEnvisagees,$commentaire,$structure,$anneeScolaire,$numOrdFiche,$date);*/

    //insererDonneesSocioDemographiques
    /*$idEtu="id96";    
    $sexeClient="contra";
    $ageClient="771568104";  
    $situationMatrimoleClient="id96";
    $activiteProfessionnelle="sn96";
    $lieuResidence="contra";
    $avecQui="771568104";
    insererDonneesSocioDemographiques($connexion,$idEtu,$sexeClient,$ageClient,$situationMatrimoleClient,$activiteProfessionnelle,$lieuResidence,$avecQui);*/
    
    //insererApprocheComportementale
    /*$idEtu="id96";    
    $clientVenuM="contra";
    $clientVenuA="771568104";  
    $pourqoi="id96";
    insererApprocheComportementale($connexion,$idEtu,$clientVenuM,$clientVenuA,$pourqoi)*/

    //insererReference
    /*$idEtu="i96";    
    $clientReferee="contra";
    $structureReference="771568104";  
    $dateReference="1996-11-07";
    insererReference($connexion,$idEtu,$clientReferee,$structureReference,$dateReference)*/

    //insererEnqueteSociale
    /*$idEtu="i96";    
    $structure="contra";
    $anneeScolaire="771568104";
    $numOrdFiche="fi96";  
    $date="1996-11-07";
    insererEnqueteSociale($connexion,$idEtu,$structure,$anneeScolaire,$numOrdFiche,$date)*/

    //insererDiagnosticSocial
    /*$idEtu="i96";    
    $problemeCentraleClientProposition="contrarrgr  efef fefef eef";
    insererDiagnosticSocial($connexion,$idEtu,$problemeCentraleClientProposition)*/

    //insererSituationSocioEconomique
    /*$idEtu="i96";    
    $compositionSituationFamille="contra";
    $habitat="771568104";
    $dynamiqeFamilialeEnvironnementale="fi96";  
    $situationProblemeClient="1996-11-07";
    insererSituationSocioEconomique($connexion,$idEtu,$compositionSituationFamille,$habitat,$dynamiqeFamilialeEnvironnementale,$situationProblemeClient)*/

    //insererSuivi
    /*$idEtu="i96";    
    $date="contra";
    $natureDemande="771568104";
    $actionEffectuee="fi96";  
    $observation="1996-11-07";
    insererSuivi($connexion,$idEtu,$date,$natureDemande,$actionEffectuee,$observation)*/

    //insererIdentificationClient
    /*$idEtu="i96";    
    $nomClient="contra";
    $prenomClient="771568104";
    $ageClient="fi96";  
    $sexeClient="1996-11-07";
    $situationMatrimoleClient="i96";    
    $departement="contra";
    $anneeEtude="7715-68-04";
    $etatSante="fi96";  
    $adresse="1996-11-07";
    $tel="i96";    
    $email="contra";
    insererIdentificationClient($connexion,$idEtu,$nomClient,$prenomClient,$ageClient,$sexeClient,$situationMatrimoleClient,$departement,$anneeEtude,$etatSante,$adresse,$tel,$email)*/


    //modifier1
    /*$nomTable="approche_comportementale";
    $nomClePrimaire="idEtu";
    $valeurClePrimaire="id96";  
    $nomChampAModifier="clientVenuA";
    $ValeurChampAModifier="non";
    modifier1($connexion,$nomTable,$nomClePrimaire,$valeurClePrimaire,$nomChampAModifier,$ValeurChampAModifier);*/

    //modifier2
    /*$nomTable="intervention";
    $nomClePrimaire1="idDossier";
    $valeurClePrimaire1="id95";
    $nomClePrimaire2="idEtu";
    $valeurClePrimaire2="sn96";  
    $nomChampAModifier="nomFichier";
    $ValeurChampAModifier="Etat de sante";
    modifier2($connexion,$nomTable,$nomClePrimaire1,$valeurClePrimaire1,$nomClePrimaire2,$valeurClePrimaire2,$nomChampAModifier,$ValeurChampAModifier);*/

    //supprimer1
    /*$nomTable="etudiant";
    $nomClePrimaire="idEtu";
    $valeurClePrimaire="contr";  
    supprimer1($connexion,$nomTable,$nomClePrimaire,$valeurClePrimaire);*/

    //supprimer2
    /*$nomTable="intervention";
    $nomClePrimaire1="idDossier";
    $valeurClePrimaire1="id96";
    $nomClePrimaire2="idEtu";
    $valeurClePrimaire2="sn96";
    supprimer2($connexion,$nomTable,$nomClePrimaire1,$valeurClePrimaire1,$nomClePrimaire2,$valeurClePrimaire2);*/
?>
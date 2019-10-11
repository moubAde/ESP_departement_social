<?php
    if (isset($_POST['connexion'])) {
         $login=$_POST['login'];
         $password=$_POST['password'];
         $connexion= new PDO ('mysql:host=localhost; dbname=assistance_sociale','root','');  
         if(empty($connexion)){
            die('erreur de connexion');
         }
         else{          
            $requete_c=$connexion->prepare("SELECT * FROM assistant_social WHERE login=:log && password=:pass");
            $requete_c->execute(array("log"=>$login , "pass"=>$password));

            if(empty($requete_c)){
               echo("requete non conforme");
            }
            else{
               if($trouve=$requete_c->fetch()){
                    echo("requete non conforme");
                    session_start();
                    $_SESSION['login']=$trouve['login'];
                    $_SESSION['password']=$trouve['password'];
                    $_SESSION['nom']=$trouve['nom'];
                    $_SESSION['prenom']=$trouve['prenom'];
                    //header("location:script.js");
               }
               else{
                   echo("not found");
               }  
            }   
         }
    }
    else{
      echo "veuillez vous connecter";
      header("location:../index.php");
    }

?>        
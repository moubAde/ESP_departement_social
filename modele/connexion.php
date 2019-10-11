<?php
    ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
    session_start();
    //echo $_SESSION['login'].' '.$_SESSION['password'];
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){
       $connexion=new PDO('mysql: host=localhost;dbname=assistance_sociale','root','');
       $connexion->query("SET NAMES UTF8");
    }
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }   
?>
<?php 
	//ini_set("display_errors",0);error_reporting(0);
    session_start();
	$_SESSION = array();
	session_destroy();
	setcookie('login','');
	setcookie('password','');
	header('location:../index.php');
?>
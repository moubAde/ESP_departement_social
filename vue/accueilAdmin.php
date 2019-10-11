<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
		<html>
				<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Acceuil Administrateur</title>

				<link href="../dist/css/bootstrap.css" rel="stylesheet">
				<!-- <link href="css/datepicker3.css" rel="stylesheet"> -->
				<!-- <link href="../dist/css/styles.css" rel="stylesheet"> -->

				<!--Icons-->
				<script src="../dist/js/lumino.glyphs.js"></script>

				<!--[if lt IE 9]>
				<script src="js/html5shiv.js"></script>
				<script src="js/respond.min.js"></script>
				<![endif]-->

				</head>

		<frameset rows="40,*" frameborder="0" target="parent">
					<frame src="menu_navbar.php" scrolling="no">

					</frame>
					<frameset  cols="234,*">
						<frame  src="../controle/etudiants.php" name="etudiants">
						</frame>

						<frame src="acceuil_operation.php" name="action" frameborder="0">
						</frame>
					</frameset>
					<noframes>
						<body>
							pas de frames?
						</body>
					</noframes>	
		</frameset>	
		</html> <?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
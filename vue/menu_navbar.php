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

				<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
				<!-- <link href="css/datepicker3.css" rel="stylesheet"> -->
				<link href="../dist/css/styles_noir_medialoot.css" rel="stylesheet">

				<!--Icons-->
				<script src="../dist/js/lumino.glyphs.js"></script><!--à gerer plus tard autre template-->

				<!--[if lt IE 9]>
				<script src="js/html5shiv.js"></script>
				<script src="js/respond.min.js"></script>
				<![endif]-->

				</head>
		<body>
				 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="../vue/accueilAdmin.php" target="parent"><span>Assistant</span>Admin</a>
									<ul class="user-menu">
										<li class="dropdown pull-right">
											<a href="../controle/deconnexion.php" target="parent" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Déconnexion</a>
										</li>
									</ul>
								</div>
												
							</div><!-- /.container-fluid -->
				</nav>
		</body>
		</html> <?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
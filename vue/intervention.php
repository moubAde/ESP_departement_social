<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
        <html>
        <head>
        	<title></title>
        	<meta charset="utf-8">
        	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
        	<link rel="stylesheet" type="text/css" href="../dist/css/myStyle.css">
        	<script type="text/javascript" src="../dist/js/bootstrap.js"></script>
        	<link rel="stylesheet" type="text/css" href="pieceJustificative.css">
        </head>
        <body>
           <div class="container col-xs-offset-0 col-md-offset-1 col-lg-offset-2" >
                <div class="row">
                    <h1 class="col-xs-offset-1">Liste d'elements du dossier d'intervention</h1>
                </div>    	
                <div class="row">
                    <div class="col-xs-10">
                        <table class="table table-striped table-bordered table-hover col-xs-12 " >
               	   	   	   	   <tr>
               	   	   	   	  	 <th>Nom</th>
               	   	   	   	  	 <th>Description</th>
               	   	   	   	  	 <th colspan="3">Action</th>
               	   	   	   	   </tr>
                          <?php foreach ($intervention as $inter) { ?>
        	       	   	   	   <tr>
                                   <td ><?php echo $inter['nomFichier']; ?></td>
                                   <td ><?php echo $inter['description']; ?></td>
                                   <td ><abbr title='Consulter'><a href="#"  data-toggle="modal" data-target="#i<?php echo $inter['idDossier']?>"><span class="glyphicon glyphicon-open-file" id="con<?php echo $inter['idEtu'] ?>"></span></a></abbr></td>
                                        
                                        <?php include('modal/modal_consulter_intervention.php'); ?>

                                   <td ><abbr title='Modifier'><a href="#" data-toggle="modal" data-target="#modi<?php echo $inter['idDossier']?>" ><span class="glyphicon glyphicon-pencil"></span></a></abbr></td>
                                        
                                        <?php include('modal/modal_modifier_intervention.php'); ?>

                                   <td><abbr title='Supprimer'><a href="#" onclick="supprimerIntervention('<?php echo $inter['idEtu'] ?>','<?php echo $inter['idDossier'];?>');"><span class="glyphicon glyphicon-remove"></span></a></abbr></td>
                            </tr>
                          <?php } ?>  
               	   	   </table>
                    </div>    
                </div>

                <div class="row col-xs-3">
                   <?php foreach ($intervention as $inter) { 
                              $dossier=$inter['idEtu']; 
                            }
                        ?> 
        	        	<abbr title="ajouter une intervention"><input type="button" name="ajouterIntervention" data-toggle="modal" data-target="#ajouterdos" id="ajouter" value="ajouter intervention" class="btn btn-success"></abbr>
        	        	<div id="intervention"></div>
        	           <?php include('modal/modal_ajouter_intervention.php'); ?> 
                </div> 
           </div>  
           <script type="text/javascript" src="../vue/intervention.js"></script>
        </body>
        </html> <?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
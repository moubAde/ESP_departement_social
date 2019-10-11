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
                  <h1 class="col-xs-offset-1">Liste de pièces justificatives</h1>
              </div>    	
              <div class="row">
                  <div class="col-xs-10">
                      <table class="table table-striped table-bordered table-hover col-xs-12 " >
             	   	   	   	   <tr>
             	   	   	   	  	 <th>Nom</th>
             	   	   	   	  	 <th>Description</th>
             	   	   	   	  	 <th colspan="3">Action</th>
             	   	   	   	   </tr>
                        <?php foreach ($piece_justificative as $piecej) { ?>
      	       	   	   	   <tr>   
      	       	   	   	   	  	 <td ><?php echo $piecej['nomJustificatif']; ?></td>
      	       	   	   	   	  	 <td ><?php echo $piecej['description']; ?></td>
      	       	   	   	   	  	 <td ><abbr title='Consulter'><a href="#" data-toggle="modal" data-target="#p<?php echo $piecej['idJustificatif']?>" ><span class="glyphicon glyphicon-open-file" id="con<?php echo $piecej['idEtu'] ?>"></span></a></abbr></td>

                                  <?php include('modal/modal_consulter_justificatif.php'); ?>

      	       	   	   	   	  	 <td ><abbr title='Modifier'><a href="#"  data-toggle="modal" data-target="#mod<?php echo $piecej['idJustificatif']?>"><span class="glyphicon glyphicon-pencil" id="mod<?php echo $piecej['idEtu'] ?>" ></span></a></abbr></td>

                                  <?php include('modal/modal_modifier_justificatif.php'); ?>
                                        
      	       	   	   	   	  	 <td><abbr title='Supprimer'><a href="#"  onclick="supprimerJustificatif('<?php echo $piecej['idEtu'] ?>','<?php echo $piecej['idJustificatif'];?>');"><span class="glyphicon glyphicon-remove" id="sup<?php echo $piecej['idEtu'] ?>"></span></a></abbr></td>
      	       	   	   	   </tr>
                          <!--  <?php 
                              echo "<script type='text/javascript'>";
                           ?> -->
                        <?php } ?>     
             	   	   </table>
                  </div>    
              </div>
              <?php include('modal/modal_modifier_justificatif.php'); ?>

                <div class="row col-xs-3">
                  
                      <?php foreach ($piece_justificative as $piecej) { 
        	               	  $piece=$piecej['idEtu']; 
                          }
                      ?> 
                     <abbr title="ajouter une pièce justificative"><input type="button" name="ajouter" data-toggle="modal" data-target="#ajouterjus" id="ajouter une pièce justificative" onclick="piece();" value="ajouter" class="btn btn-success"></abbr>
                    <?php include('modal/modal_ajouter_justificatif.php'); ?>	
                </div> 
                     	
         </div>  
         <script type="text/javascript" src="../vue/pieceJustificative.js"></script>
      </body>
      </html> <?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
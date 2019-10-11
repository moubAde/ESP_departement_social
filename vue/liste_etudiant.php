<?php
   ini_set("display_errors",0);error_reporting(0);//pour masquer les messages d'erreurs
   session_start();
   //echo $_SESSION['login'].' '.$_SESSION['password'];
   if (isset($_SESSION['login']) && isset($_SESSION['password'])){  ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>

        <meta charset="utf-8">
        <meta name="description" content="liste_etudiant">
        <meta name="author" content="fonkoue & moub">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>liste_etudiant</title>

        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
        <link href="../asset/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../dist/css/styleListeEtudiants.css">
        <!-- end: Css -->

        <link rel="shortcut icon" href="../asset/img/logomi.png">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        </head>

        <body>


           <div class="container-fluid mimin-wrapper">
            
                <!-- start:Left Menu -->
                 <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>  
                    <div class="row" id="totalchoix">
                      <div class="col-xs-12" id="selectelement">     
                        <form method="POST" action="gererEtudiants.php">
                            <select name="etudiant" class="liste">
                              <?php foreach ($etudiants as $etu) { ?>
                                <option value="<?php echo $etu['idEtu'];?>" style="width:5px"><?php echo $etu['nom'];?> <?php echo $etu['prenom'];?></option>
                                <?php } ?> 
                            </select>
                        </form>
                      </div> 
                      <div class="col-xs-12" id="menulement">
                        <button class="btn btn-default dropdown-toggle menu" type="button" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-option-horizontal"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="liste_etudiant_controle.php" data-toggle="modal" data-target="#mesEtudiants" target="action" onclick="modifierEtudiant();">modifier</a></li>
                          <li><a href="#">supprimer</a></li>
                        </ul>
                      </div>
                    </div>
                  <!------------------------------------------------------>
                  <div class="row">
                      <div class="col-xs-7" >
                          <!--<?php //foreach ($etudiants as $etu) { ?>
                             <?php echo $etudiants[0]['nom'];?>  <?php echo $etudiants[0]['prenom'];?></br>
                          <?php //} ?>-->
                          <input id="recherche" placeholder="recherche" type="search" name="recherche" onKeyPress="recherche('<?php echo $etudiants;?>');">
                      </div>
                      <div class="col-xs-1" >
                          <button type="button">x</button> 
                      </div>
                  </div>
                  <!------------------------------------------------------>
                  <form method="POST" action="operations_etudiant.php"  target="action">
                    <span id="liste">
                      <?php foreach ($etudiants as $etu) { ?> 
                          <!-- <input name="choix_etudiant" type="hidden" value>
                          <input name="<?php $etu['idEtu']; ?>" type="submit" value="<?php echo $etu["prenom"]; ?>"></br>-->
                          <a href="operations_etudiant.php?id=<?php echo $etu['idEtu']?>" target="action"><?php echo $etu['nom'];?>  <?php echo $etu['prenom'];?><a></br>
                      <?php } ?>
                       <input type="hidden" id="hidden">
                    </span>
                  </form>
                  </ul>
                </div>
            </div>
          </div>  
          <!-- onclick="selection(<?php $etu['idEtu']?>" -->
            <!-- end: Left Menu -->

            <!-- start: Javascript -->
      <script src="../asset/js/jquery.min.js"></script>
      <script src="../asset/js/jquery.ui.min.js"></script>
      <script src="../asset/js/bootstrap.min.js"></script>


      <!-- plugins -->
      <script src="../asset/js/plugins/moment.min.js"></script>
      <script src="../asset/js/plugins/jquery.datatables.min.js"></script>
      <script src="../asset/js/plugins/datatables.bootstrap.min.js"></script>
      <script src="../asset/js/plugins/jquery.nicescroll.js"></script>


      <!-- custom -->

      <script src="../asset/js/main.js"></script>
      <script type="text/javascript" src="../vue/liste_etudiant.js"></script>
      <!--<script type="text/javascript">
        $(document).ready(function(){
          $('#datatables-example').DataTable();
        });
      </script>-->
      <!-- end: Javascript -->        
      <script type="text/javascript">
          function selection(id){
              alert('fr');
              document.getElementById('hidden').value='<?php echo $etu["idEtu"]?>';
              var t=document.getElementById('hidden').value;
              alert(t);
          }
      </script>
      </body> 

      </html><?php
   }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }    
?>
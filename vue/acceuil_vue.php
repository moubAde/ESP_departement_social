<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceuil</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<?php
   if (!isset($_SESSION)) { ?>
          <body id="mimin" class="dashboard" background="image/back2.jpg">

            <div class="container">

              <form class="form-signin" method="POST" action="#">
                <div class="panel periodic-login">
                    <span class="atomic-number"><span class="glyphicon glyphicon-apple"></span></span>
                    <div class="panel-body text-center">
                        <!--<h1 class="atomic-symbol">Mi</h1>
                        <p class="atomic-mass">14.072110</p>
                        <p class="element-name">Miminium</p>

                        <i class="icons icon-arrow-down"></i>-->
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text text-user" required name="login">
                          <span class="bar"></span>
                          <label>Username</label>
                          <span class="glyphicon glyphicon-user" id="gly-user">
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="password" class="form-text text-lock" required name="password">
                          <span class="bar"></span>
                          <label>Password</label>
                          <span class="glyphicon glyphicon-lock" id="gly-lock">
                        </div>
                        <label class="pull-left">
                        <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                        </label>
                        <input type="submit" class="btn col-md-12" value="connexion" name="connexion"/>
                    </div>
                      <div class="text-center" style="padding:5px;">
                          <a href="forgotpass.html">Forgot Password </a>
                          <a href="reg.html">| Signup</a>
                      </div>
                </div>
              </form>

            </div><?php
        }
   if(isset($_SESSION) && isset($_POST)){ ?> 
            <span id="span1"> 
              <body id="mimin" class="dashboard" background="image/back2.jpg" onload="change();">
                <div class="container">
                 <form class="form-signin" method="POST" action="#">
                  <div class="panel periodic-login">
                      <span class="atomic-number"><span class="glyphicon glyphicon-apple"></span></span>
                      <div class="panel-body text-center">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text text-user" required name="login" disabled>
                            <span class="bar"></span>
                            <label>Username</label>
                            <span class="glyphicon glyphicon-user" id="gly-user">
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="password" class="form-text text-lock" required name="password" disabled >
                            <span class="bar"></span>
                            <label>Password</label>
                            <span class="glyphicon glyphicon-lock" id="gly-lock">
                          </div>
                          <label class="pull-left">
                          <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                          </label>
                          <input type="submit" class="btn col-md-12" value="Connexion" name="connexion" disabled/>
                      </div>
                        <div class="text-center" style="padding:5px;">
                            Forgot Password
                            | Signup
                        </div>
                  </div>
                 </form>
                </div>
            </span>
            <span id="span2">
              <body id="mimin" class="dashboard" background="../image/back2.jpg" onload="change();">
                <div class="container">
                           <form class="form-signin" method="POST" action="#">
                              <div class="panel periodic-login">
                                  <span class="atomic-number"><span class="glyphicon glyphicon-apple"></span></span>
                                  <div class="form-group row" align="center">
                                                <h3>Bienvenu Mr <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></h3>  
                                  </div>
                                  <div class="panel-body text-center">
                                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <a href="controle/accordion_controleur.php"><button type="button" id="creer" class="btn btn-info" name="creer" onclick="nouveau();">Creer un nouveau cas</button></a>
                                      </div>
                                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <a href="vue/accueilAdmin.php"><button type="button" id="administrer" class="btn btn-info" name="administrer" onclick="ancien();">Administrer un cas existant</button></a>
                                      </div>
                                  </div>
                                </div>  
                             </form>
                            </div>     
            </span>
            <script type="text/javascript" src="script.js"></script>
            </body><?php  
        }
?>
      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>
<?php 
    ini_set("display_errors",0);error_reporting(0);
    session_start();
    //echo $_SESSION['login'].' '.$_SESSION['password'];
    if (isset($_SESSION['login']) && isset($_SESSION['password'])){ ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>

            <meta charset="utf-8">
            <meta name="description" content="Miminium Admin Template v.1">
            <meta name="author" content="Isna Nur Azis">
            <meta name="keyword" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Miminium</title>

            <!-- start: Css -->
            <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

            <!-- plugins -->
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/nouislider.min.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/select2.min.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/bootstrap-material-datetimepicker.css"/>

            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
            <link rel="stylesheet" type="text/css" href="../asset/css/plugins/fullcalendar.min.css"/>
            <link href="../asset/css/style.css" rel="stylesheet">
            <link href="../dist/css/styleOperations.css" rel="stylesheet">
            <!-- end: Css -->

            <link rel="shortcut icon" href="../asset/img/logomi.png">
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->
            </head>

          <body id="mimin" class="dashboard">

                <div class="container-fluid mimin-wrapper">
                    <!-- start: Content -->
                    <div id="content" class="search-v1">
                      <div class="panel">
                        <div class="panel-body">
                          
                          <div class="col-md-9 col-sm-12">
                                  <h3 class="animated fadeInLeft">Service Assistant social</h3>
                                  <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Dakar,Sénégal</p>

                              <ul id="tabs-demo6" class="nav nav-tabs nav-tabs-v6 masonry-tabs" role="tablist">
                              <li role="presentation" class="active">
                                <a href="#tabs-demo7-area1" id="tabs-demo6-1" role="tab" data-toggle="tab" aria-expanded="true">Entretien Individuel</a>
                              </li>
                              <li role="presentation" class="">
                                <a href="#tabs-demo7-area2" role="tab" id="tabs-demo6-2" data-toggle="tab" aria-expanded="false">Enquête Social</a>
                              </li>
                              <li role="presentation" class="">
                                <a href="#tabs-demo7-area3" role="tab" id="tabs-demo6-3" data-toggle="tab" aria-expanded="false">Pièces Justificatives</a>
                              </li>
                              <li role="presentation" class="">
                                <a href="#tabs-demo7-area4" role="tab" id="tabs-demo6-5" data-toggle="tab" aria-expanded="false">Intervention</a>
                              </li>
                            </ul>
                          </div>


                          <div class=" meteo col-md-3">
                                  <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                                    <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Dakar</h3>
                                    <h1 style="margin-top: -10px;color: #ddd;">25<sup>o</sup></h1>
                                  </div>
                                  <div class="wheather col-md-6 col-sm-6 ">
                                        <div class="stormy rainy animated pulse infinite">
                                          <div class="shadow">
                                            
                                          </div>
                                        </div>
                                        <div class="sub-wheather">
                                          <div class="rain">
                                              <div class="droplet droplet1"></div>
                                              <div class="droplet droplet2"></div>
                                              <div class="droplet droplet3"></div>
                                              <div class="droplet droplet4"></div>
                                              <div class="droplet droplet5"></div>
                                              <div class="droplet droplet6"></div>
                                            </div>
                                        </div>
                                  </div> 
                           </div>


                           <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="panel">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Rainy</h4>
                                </div>
                                <div class="panel-body">
                                  <center>
                                    <div class="wheather">
                                        <div class="stormy rainy animated pulse infinite">
                                          <div class="shadow">
                                            
                                          </div>
                                        </div>
                                        <div class="sub-wheather">
                                          <div class="rain">
                                              <div class="droplet droplet1"></div>
                                              <div class="droplet droplet2"></div>
                                              <div class="droplet droplet3"></div>
                                              <div class="droplet droplet4"></div>
                                              <div class="droplet droplet5"></div>
                                              <div class="droplet droplet6"></div>
                                            </div>
                                        </div>
                                      </div>
                                  </center>
                                </div>
                              </div>
                            </div> -->

                        </div>
                      </div>
                      <div class="col-md-12">
                         <div class="col-md-12 tabs-area box-shadow-none">
                            <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
                              <div role="tabpanel" class="tab-pane search-v1-menu1 fade active in" id="tabs-demo7-area1" aria-labelledby="tabs-demo7-area1">
                                <?php include('entretienIndividuel.php'); ?>
                             	</div>

                             	 <div role="tabpanel" class="tab-pane fade" id="tabs-demo7-area2" aria-labelledby="tabs-demo7-area2">
                                <?php include('enquetesocial.php'); ?>
                             	 </div>  	

                             	 <div role="tabpanel" class="tab-pane fade" id="tabs-demo7-area3" aria-labelledby="tabs-demo7-area3">
                                 <?php include('pieceJustificative.php'); ?>
                             	 </div>  	

                             	 <div role="tabpanel" class="tab-pane fade" id="tabs-demo7-area4" aria-labelledby="tabs-demo7-area4">
                                <?php include('intervention.php'); ?>
                             	 </div>  	


                            </div>

                          </div>
                      </div>
                    </div>
                  </div>  

          <!-- start: Javascript -->
          <script src="../asset/js/jquery.min.js"></script>
          <script src="../asset/js/jquery.ui.min.js"></script>
          <script src="../asset/js/bootstrap.min.js"></script>


          <!-- plugins -->
          <script src="asset/js/plugins/../moment.min.js"></script>
          <script src="asset/js/plugins/../jquery.datatables.min.js"></script>
          <script src="asset/js/plugins/../datatables.bootstrap.min.js"></script>
          <script src="asset/js/plugins/../jquery.nicescroll.js"></script>

          <!-- custom -->
          <script src="../asset/js/main.js"></script>

          <!-- end: Javascript -->
          </body>
          </html> <?php
    }    
    else{
        echo "veuillez vous connecter";
        header("location:../index.php");
    }
?>
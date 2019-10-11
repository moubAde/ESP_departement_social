<?php
  if (isset($_POST['connexion'])) {
     include(dirname(__FILE__).'/modele/acceuil_modele.php');
  }
  include(dirname(__FILE__).'/vue/acceuil_vue.php');
?>
<?php
var_dump($_URL);exit;
require_once('../Classes/paciente.php');
  
  $pac = new Paciente;
  
  if(!isset($_SESSION['usuID'])){
    $usu->login();
  }else {
    $usu->logout();
  }

?>

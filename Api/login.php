<?php
//require_once('../Classes/db.php');
require_once('../Classes/usuario.php');
  //$db = new DAO;
  $usu = new Usuario;
  session_start();
  if(!isset($_SESSION['usuID'])){
    $usu->login();
  }else {
    $usu->logout();
  }

?>

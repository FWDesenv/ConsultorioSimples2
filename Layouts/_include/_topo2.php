<!doctype html>
<html lang="pt-br">
  <head>
    <?php
      session_start();
      if (!isset($_SESSION['usuID'])){
        session_destroy();						//Destroi a seção por segurança
       	header("Location: /ConsultorioSimples/index.php"); exit;   //Redireciona o visitante para login
      }
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Brackets">
    <meta name="author" content="Willian Barreira Bouças">
    <meta name="keywords" content="Psicopedagogia, Consultorio, Consultorio Simples, Clinica">
    <meta name="description" content="Software de gerenciamento de consultorios">
    <meta name="application-name" content="Consultorio Simples">
    <meta http-equiv="refresh" content="60">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/ConsultorioSimples/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="/ConsultorioSimples/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <title>Consultório Simples</title>
  </head>
<body> <!--style="background-color: #E0FFFF"  -->
  <div class="container-fluid bg-primary text-white">
    <div class="row" align="center">
      <div class="col-12" style="margin-top:1%;">
        <?php include_once('../../Paginas/menu.html'); ?>
      </div>
    </div>
    <div class="row" align="right">
      <div class="col-8">
      </div>
      <div class="col-2">
        <?php echo $_SESSION['usuID']; ?>
      </div>
      <div class="col-2">
        <a href="../../Api/login.php">
          <font color="white">
            Logout
          </font>
        </a>
      </div>
    </div>

  </div>

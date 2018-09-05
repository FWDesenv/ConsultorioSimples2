<?php
require_once('db.php');

class Usuario{
  var $login;
  var $senha;
  var $permissao;
  var $origem;
  var $ativo;

  function login(){
    $db = new DAO;
    //Criando Conexão
    $conexao = $db->getConexao();
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    //Comando SQL
    $query = "SELECT * FROM cs.cs_usuario WHERE usu_login = '$login' AND usu_senha = '$senha'";

    //Executando comando SQL
    $result = mysqli_query($conexao, $query)
      or die ('Falha na execução da consulta'. mysql_error());

    //Verifica se retornou resultado da consulta efetuada
    if (mysqli_num_rows($result)>0){
      $ressession = mysqli_fetch_array($result);
      if(!isset($_SESSION)) 	//verifica se há sessão aberta
  		session_start();		//Inicia seção
  		//Abrindo seções
  		$_SESSION['usuID'] = $ressession['usu_login'];
      echo "<script>alert('Seja bem vindo ".$_SESSION['usuID']."!');</script>";
  		echo "<script> location.href='../Paginas/consulta/agenda.php' </script>";
    }else {
      echo "<script>alert('Usuário ou senha inválidos!');</script>";
      echo "<script> location.href='../index.php' </script>";
    }
  }
  function logout(){
    session_start();
    session_destroy();
    header("Location: ../index.php");
  }
}
?>

<?php
require_once('db.php');

class Paciente{
    var $id;
    var $nome;
    var $cpf;
    var $nascimento;
    var $rg;
    var $celular;
    var $email;
    var $ativo;

  function pacInserir(){
    $db = new DAO;
    //Criando Conexão
    $conexao = $db->getConexao();
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];;
    $nascimento = $_POST["nascimento"];;
    $rg = $_POST["rg"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];;
    $ativo = $_POST["ativo"];
      
    //Comando SQL
    $query = "INSERT INTO cs.cs_paciente (pac_nome, pac_cpf, pac_nascimento, pac_rg, pac_celular, pac_email, pac_ativo) VALUES('$nome','$cpf','$nascimento','$rg','$celular','$email','$ativo')";

    //Executando comando SQL
    $result = mysqli_query($conexao, $query)
      or die ('Falha na execução da consulta'. mysql_error());
    
    echo "<script> alert('Registro incluso com sucesso!'); </script>";  
    echo "<script> location.href='../Paginas/consulta/pacientes.php' </script>";
    
  }
  function pacAlterar(){
    session_start();
    session_destroy();
    header("Location: ../index.php");
  }
}
?>

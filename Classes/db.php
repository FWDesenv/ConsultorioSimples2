<?php
class DAO{
  var $conexao;
  //Estabelece conxão com o Banco de Dados
  function getConexao(){
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="cs";

    $conexao = mysqli_connect($host, $user, $password,$dbname)
	   or die ('Não foi possivel se conectar aos servidores' . mysql_error());

    return $conexao;
  }

}

?>

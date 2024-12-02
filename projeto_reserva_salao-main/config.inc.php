<?php
  /*
  //Etapa 1 - Conexão com servidor
  $conexao = mysqli_connect("localhost","root","");
  //Etapa 2 - Selecionar Banco de Dados
  $bd = mysqli_select_db($conexao,"bd3");
  */

  $host = "localhost";  // ou o IP do servidor de banco de dados
  $user = "root";  // usuário do banco
  $pass = "";  // senha do banco
  $dbname = "bd3";  // nome do banco de dados

// Conecta ao banco de dados
  $conexao = mysqli_connect($host, $user, $pass, $dbname);

// Verificação da conexão
  if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
  }
?>
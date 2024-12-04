<?php

  //Etapa 1 - Conexão com servidor
  $conexao = mysqli_connect("localhost","root","");
  //Etapa 2 - Selecionar Banco de Dados
  $bd = mysqli_select_db($conexao,"bd3");

?>
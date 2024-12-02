<?php

    include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $apartamento = $_REQUEST['apartamento'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $cidade = $_REQUEST['cidade'];
    $estado = $_REQUEST['estado'];

    $sql = "INSERT INTO usuario
    (nome,apartamento,email,telefone,cidade,estado) VALUES
    ('$nome','$apartamento','$email','$telefone','$cidade','$estado')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Usuário cadastrado com sucesso.";
    }

    mysqli_close($conexao);
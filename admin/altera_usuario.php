<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $apartametno = $_REQUEST['apartamento'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $cidade = $_REQUEST['cidade'];
    $estado = $_REQUEST['estado'];

    $sql = "UPDATE cliente SET
    nome = '$nome', apartamento = '$apartamento',email = '$email',telefone = '$telefone',
    cidade = '$cidade',estado = '$estado' WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Usuário alterado com sucesso.";
    }

    mysqli_close($conexao);
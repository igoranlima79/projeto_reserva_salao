<?php

    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $apartamento = $_REQUEST['apartamento'];
    $email = $_REQUEST['email'];
    $evento = $_REQUEST['evento'];
    $mensagem = $_REQUEST['mensagem'];
    $telefone = $_REQUEST['telefone'];


    $sql = "INSERT INTO contato
            (nome,apartamento,email,assunto,mensagem) VALUES
            ('$nome','$apartamento','$telefone','$email','$assunto','$mensagem')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h3> Mensagem enviada com sucesso.</h3>";
    }else{
        echo "<h3>Erro ao enviar mensagem.</h3>";
    }

    mysqli_close($conexao);
<?php

    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $apartamento = $_REQUEST['apartamento'];
    $data = $_REQUEST['data'];
    $horarioinicial = $_REQUEST['horarioinicial'];
    $horariofinal = $_REQUEST['horariofinal'];
    $observacao = $_REQUEST['observacao'];

    $sql = "INSERT INTO reserva
            (nome, apartamento, data, horarioinicial, horariofinal, observacao) VALUES
            ('$nome','$apartamento','$data','$horarioinicial','$horariofinal','$observacao')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h3> Solicitação enviada com sucesso.</h3>";
    }else{
        echo "<h3>Erro ao enviar solicitação.</h3>";
    }

    mysqli_close($conexao);


    
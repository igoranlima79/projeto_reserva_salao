<?php

    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $apartamento = $_REQUEST['apartamento'];
    $data = $_REQUEST['data'];
    $horarioinicio = $_REQUEST['horainicio'];
    $horariofinal = $_REQUEST['horafim'];
    $observacao = $_REQUEST['observacao'];

    $sql = "INSERT INTO reserva
            (nome,apartamento,data,horarioinicio, horariofim,observacao) VALUES
            ('$nome','$apartamento','$data','$horainicio', '$horafim','$observacao')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h3> Solicitação enviada com sucesso.</h3>";
    }else{
        echo "<h3>Erro ao enviar solicitação.</h3>";
    }

    mysqli_close($conexao);
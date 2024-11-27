<?php

    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $apartamento = $_REQUEST['apartamento'];
    $data = $_REQUEST['data'];
    $horario = $_REQUEST['hora'];
    $observacao = $_REQUEST['observacao'];

    $sql = "INSERT INTO contato
            (nome,apartamento,data,horario,observacao) VALUES
            ('$nome','$apartamento','$data','$horario','$observacao')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h3> Solicitação enviada com sucesso.</h3>";
    }else{
        echo "<h3>Erro ao enviar solicitação.</h3>";
    }

    mysqli_close($conexao);
<?php

    include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $senha = $_REQUEST['senha'];

    $sql = "SELECT * FROM usuario WHERE nome = '$nome'
            AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_array($resultado);
        if ($senha == $dados['senha']) {
            // Login válido
            session_start();
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
    
            header("Location: index.php");
        }else{
            header("Location: form_login.php");
    
        }
    } else {
        // Login inválido
        echo "Nome de usuário ou senha incorretos.";
    }
    
    mysqli_close($conexao);

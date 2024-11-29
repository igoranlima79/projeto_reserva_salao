<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Residencial Imperial Luxor</title>
    <style>
        /* Definir a cor de fundo para toda a página */
        body {
            background-image: url("Imagem/imagem2.jpeg"); /* Substitua pelo caminho da sua imagem */
            background-size: cover; /* A imagem cobre toda a tela */
            background-position: center; /* A imagem fica centralizada */
            font-family: Arial, sans-serif; /* Definir a fonte padrão */
            color: black;
            background-color: rgba(255, 255, 255, 0.5); /* Cor de fundo transparente */
            background-blend-mode: overlay; /* Mistura a cor e a imagem */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #006400;
            font-size: 36px;
            margin-top: 50px;
        }

        nav {
            text-align: center;
            margin: 20px;
        }

        nav a {
            text-decoration: none;
            color: #006400;
            font-size: 18px;
            margin: 0 15px;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
        }

        /* Melhoria no layout do conteúdo */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<header>
    <h1>Painel Administrativo - Residencial Imperial Luxor</h1>
</header>

<div class="container">
    <?php 
    /*
        include("sessao.php");

        if(logado()) {
            // O usuário está logado
            echo "<p>Bem-vindo <b>$_SESSION[usuario]</b>!</p>";
        } else {
            header("Location: form_login.php");
            exit();
        }
    */
    ?>
    
    <nav>
        <a href="?pg=lista_msg">Lista de Mensagens</a> |
        <a href="?pg=form_usuario">Cadastrar Usuários</a> |
        <a href="?pg=lista_usuario">Lista de Usuários</a>
    </nav>
    
    <?php
        // Carregar conteúdo com base na URL
        if(empty($_SERVER['QUERY_STRING'])) {
            $var = "conteudo.php";
            include_once($var);
        } else {
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
    ?>
</div>

</body>
</html>

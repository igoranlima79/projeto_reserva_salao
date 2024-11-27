<h1>Painel Administrativo - Residencial Imperial Luxor</h1>
<body>
    <?php 
    /*
        include("sessao.php");

        if(logado()) {
            //O usuário está logado
            echo "<p>Bem-vindo <b>$_SESSION[usuario]</b>!</p>";
        }else{
            header("Location: form_login.php");
            exit();
            }
    */
    ?>
    <nav>
        
        <a href="?pg=lista_msg">Lista de Mensagens </a> |
        <a href="?pg=form_usuario">Cadastrar Usuários </a> |
        <a href="?pg=lista_usuario">Lista de Usuários </a> |
        <a href="?pg=lista_reserva">Lista de Reservas </a> |
    </nav>
    <?php

        if(empty($_SERVER['QUERY_STRING'])){
            $var = "conteudo.php";
            include_once($var);
        }else{
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
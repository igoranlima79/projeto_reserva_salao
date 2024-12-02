<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
    <style>
        /* Definir a cor de fundo para toda a página */
        body {
            background-image: url("http://localhost/Projeto_final_web/Imagem/imagem2.jpeg"); /* Substitua pelo caminho da sua imagem */
            background-size: cover; /* A imagem cobre toda a tela */
            background-position: center; /* A imagem fica centralizada */
            font-family: Arial, sans-serif; /* Definir a fonte padrão */
            color:black;
            background-color: rgba(255, 255, 255, 0.5); /* Cor de fundo transparente */
            background-blend-mode: overlay; /* Mistura a cor e a imagem */
        }
    </style>
</head>


<h1>Painel Administrativo - Residencial Imperial Luxor</h1>

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
</nav>
<?php

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "conteudo.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
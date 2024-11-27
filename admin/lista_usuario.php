<h2>Lista de Usuários</h2>

<p><a href="pg=form_usuario"> Cadastrar novo usuário </a><br><br>

<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM usuario");

    while($usuario = mysqli_fetch_array($sql)){
        echo "Nome: $usuario[nome] <br>";
        echo "Apartametno: $usuario[apartamento]";
        echo "E-mail: $usuario[email] <br>";
        echo "Telefone: $usuario[telefone] <br>";
        echo "Cidade: $usuario[cidade] <br>";
        echo "Estado: $usuario[estado] <br>";
        echo "<a href=?pg=excluir_usuario&id=$usuario[id]><b>[X] Excluir</b></a>";
        echo "<a href=?pg=form_altera_usuario&id=$usuario[id]><b>[v] Alterar</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível ler as mensagens.";
    }
    
    mysqli_close($conexao);
<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM usuario WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    while($usuario = mysqli_fetch_array($query)){

?>
<h3>Alterar usuário </h3>

<form action="?pg=altera_usuario&id=<?= $usuario['id'];?>" method="post">
  
  Nome: <input type="text" name="nome" value="<?= $usuario['nome'];?>"> <br>
  Apartamento: <input type="text" name="apartamento" value="<?= $usuario['apartamento'];?>"> <br>
  E-mail: <input type="text" name="email" value="<?= $usuario['email'];?>"> <br>
  Telefone: <input type="text" name="telefone" value="<?= $usuario['telefone'];?>"> <br>
  Cidade: <input type="text" name="cidade" value="<?= $usuario['cidade'];?>"> <br>
  Estado: <input type="text" name="estado" value="<?= $usuario['estado'];?>"> <br>
  Senha: <input type="password" name="senha" value="<?= $usuario['senha'];?>"> <br><br>
 <input type="submit" value="Salvar">
</form>

<?php
    }
?>
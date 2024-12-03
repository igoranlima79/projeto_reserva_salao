<?php
include_once("../config.inc.php");

$id = $_REQUEST['id'];

// Recuperar dados do usuário
$sql = "SELECT * FROM usuario WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($usuario = mysqli_fetch_assoc($result)) {
?>
    <h3>Alterar Usuário</h3>
    <form action="?pg=altera_usuario&id=<?= htmlspecialchars($usuario['id']); ?>" method="post">
        Nome: <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome']); ?>"> <br>
        Apartamento: <input type="text" name="apartamento" value="<?= htmlspecialchars($usuario['apartamento']); ?>"> <br>
        E-mail: <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']); ?>"> <br>
        Telefone: <input type="text" name="telefone" value="<?= htmlspecialchars($usuario['telefone']); ?>"> <br>
        Cidade: <input type="text" name="cidade" value="<?= htmlspecialchars($usuario['cidade']); ?>"> <br>
        Estado: <input type="text" name="estado" value="<?= htmlspecialchars($usuario['estado']); ?>"> <br>
        Senha: <input type="password" name="senha" placeholder="Digite uma nova senha (opcional)"> <br><br>
        <input type="submit" value="Salvar">
    </form>
<?php
} else {
    echo "<p>Usuário não encontrado.</p>";
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>

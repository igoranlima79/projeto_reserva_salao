<h2 style="text-align: center; font-family: Arial, sans-serif;">Lista de Usuários</h2>

<?php
include_once("../config.inc.php");

// Consulta ao banco de dados
$sql = mysqli_query($conexao, "SELECT * FROM usuario");

if ($sql && mysqli_num_rows($sql) > 0) {
    echo '<div style="width: 90%; margin: 0 auto; font-family: Arial, sans-serif;">';
    echo '<table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">';
    echo '<thead>';
    echo '<tr style="background-color: #f2f2f2; border-bottom: 2px solid #ccc;">';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Nome</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Apartamento</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">E-mail</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Telefone</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Cidade</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Estado</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Senha</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Ações</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($usuario = mysqli_fetch_array($sql)) {
        echo '<tr>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['nome']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['apartamento']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['email']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['telefone']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['cidade']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['estado']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($usuario['senha']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc; text-align: center;">';
        echo '<a href="?pg=excluir_usuario&id=' . htmlspecialchars($usuario['id']) . '" style="color: red; text-decoration: none; margin-right: 10px;" onclick="return confirm(\'Tem certeza que deseja excluir este usuário?\');">[X] Excluir</a>';
        echo '<a href="?pg=form_altera_usuario&id=' . htmlspecialchars($usuario['id']) . '" style="color: green; text-decoration: none;">[v] Alterar</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "<p style='text-align: center; color: #555;'>Não há usuários cadastrados.</p>";
}

mysqli_close($conexao);
?>


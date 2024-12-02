<h2 style="text-align: center; font-family: Arial, sans-serif;">Lista de Mensagens</h2>

<?php
include_once("../config.inc.php");

// Consulta ao banco de dados
$sql = mysqli_query($conexao, "SELECT * FROM contato");

if ($sql && mysqli_num_rows($sql) > 0) {
    echo '<div style="width: 90%; margin: 0 auto; font-family: Arial, sans-serif;">';
    echo '<table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">';
    echo '<thead>';
    echo '<tr style="background-color: #f2f2f2; border-bottom: 2px solid #ccc;">';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Nome</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Apartamento</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">E-mail</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Assunto</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Mensagem</th>';
    echo '<th style="padding: 10px; border: 1px solid #ccc;">Ações</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($tabela = mysqli_fetch_array($sql)) {
        echo '<tr>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($tabela['nome']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($tabela['apartamento']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($tabela['email']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc;">' . htmlspecialchars($tabela['assunto']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc; max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">' . htmlspecialchars($tabela['mensagem']) . '</td>';
        echo '<td style="padding: 10px; border: 1px solid #ccc; text-align: center;">';
        echo '<a href="?pg=excluir&id=' . htmlspecialchars($tabela['id']) . '" style="color: red; text-decoration: none;" onclick="return confirm(\'Tem certeza que deseja excluir esta mensagem?\');">Excluir</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "<p style='text-align: center; color: #555;'>Não há mensagens cadastradas.</p>";
}

mysqli_close($conexao);
?>



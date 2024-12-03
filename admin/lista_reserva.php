<h2 style="text-align: center; font-family: Arial, sans-serif;">Reservas Solicitadas</h2>

<?php
include_once("../config.inc.php");

// Consulta ao banco de dados
$sql = "SELECT * FROM reserva";
$query = mysqli_query($conexao, $sql);

if (!$query) {
    die("<p style='text-align: center; color: red;'>Erro ao carregar reservas: " . mysqli_error($conexao) . "</p>");
}

// Exibindo as reservas em formato compacto
echo "<table style='width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<thead>";
echo "<tr style='background-color: #f4f4f4; text-align: left;'>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Nome</th>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Apartamento</th>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Data</th>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Horário</th>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Observação</th>";
echo "<th style='border: 1px solid #ccc; padding: 8px;'>Ação</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($reserva = mysqli_fetch_assoc($query)) {
    $nome = htmlspecialchars($reserva['nome']);
    $apartamento = htmlspecialchars($reserva['apartamento']);
    $data = htmlspecialchars($reserva['data']);
    $horarioinicial = htmlspecialchars($reserva['horarioinicial']);
    $horariofinal = htmlspecialchars($reserva['horariofinal']);
    $observacao = htmlspecialchars($reserva['observacao']);
    $id = htmlspecialchars($reserva['id']);

    echo "<tr>";
    echo "<td style='border: 1px solid #ccc; padding: 8px;'>$nome</td>";
    echo "<td style='border: 1px solid #ccc; padding: 8px;'>$apartamento</td>";
    echo "<td style='border: 1px solid #ccc; padding: 8px;'>$data</td>";
    echo "<td style='border: 1px solid #ccc; padding: 8px;'>$horarioinicial - $horariofinal</td>";
    echo "<td style='border: 1px solid #ccc; padding: 8px;'>$observacao</td>";
    echo "<td style='border: 1px solid #ccc; padding: 8px; text-align: center;'>";
    echo "<a href='?pg=excluir&id=$id' style='color: red; text-decoration: none; font-weight: bold;'>Excluir</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

// Fechando a conexão
mysqli_close($conexao);
?>


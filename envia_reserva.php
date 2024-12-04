<?php
// Incluir configuração e iniciar a sessão (se necessário)
include_once("config.inc.php");

// Receber os dados do formulário
$nome = $_REQUEST['nome'];
$apartamento = $_REQUEST['apartamento'];
$data = $_REQUEST['data'];
$horarioinicial = $_REQUEST['horarioinicial'];
$horariofinal = $_REQUEST['horariofinal'];
$observacao = $_REQUEST['observacao'];

// Verificar disponibilidade no banco de dados
$sql_verifica = "SELECT * FROM reserva 
                 WHERE data = ? 
                 AND (horarioinicial < ? AND horariofinal > ?)";

$stmt = $conexao->prepare($sql_verifica);
$stmt->bind_param("sss", $data, $horariofinal, $horarioinicial);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    // Conflito de horários encontrado
    echo "<h3>Data ou horário já reservado. Tente outro período.</h3>";
} else {
    // Inserir reserva caso não haja conflito
    $sql = "INSERT INTO reserva
            (nome, apartamento, data, horarioinicial, horariofinal, observacao) VALUES
            (?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssss", $nome, $apartamento, $data, $horarioinicial, $horariofinal, $observacao);

    if ($stmt->execute()) {
        echo "<h3>Solicitação enviada com sucesso.</h3>";
    } else {
        echo "<h3>Erro ao enviar solicitação: " . $stmt->error . "</h3>";
    }
}

// Fechar conexões
$stmt->close();
mysqli_close($conexao);



    
<h2 style="text-align: center; font-family: Arial, sans-serif;">Reservas Solicitadas</h2>

<?php
include_once("../config.inc.php");

// Consulta ao banco de dados
$sql = mysqli_query($conexao, "SELECT * FROM reserva");

while($reserva = mysqli_fetch_array($sql)){
    echo "Nome: $reserva[nome] <br>";
    echo "Apartamento: $reserva[apartamento] <br>";
    echo "Data: $reserva[data] <br>";
    echo "Horario Inicio: $reserva[horarioinicio] <br>";
    echo "Horario Final: $reserva[horariofinal] <br>";
    echo "Observação: $reserva[mensagem] <br>";
    echo "<a href=?pg=excluir&id=$$reserva[id]><b>X</b></a>";
    echo "<hr>";
}

if(!$sql){
    echo "Não foi possível ler as reservas.";
}

mysqli_close($conexao);
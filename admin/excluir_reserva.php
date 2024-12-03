<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM reserva WHERE id = $id");

    mysqli_close($conexao);

    echo "<h2>Reserva excluída.</h2>";
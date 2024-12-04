<?php

function logado() {
    // Inicia a sessão apenas se necessário
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Verifica se o ID do usuário está configurado
    return isset($_SESSION['id']) && !empty($_SESSION['id']);
}

<?php
session_start();
session_destroy(); // Destroi todas as variáveis de sessão
header("Location: form_login.php"); // Redireciona para a página de login
exit();
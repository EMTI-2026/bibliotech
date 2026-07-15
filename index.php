<?php
// index.php
session_start();

if (isset($_SESSION['usuario_id'])) {
    // Usuário já logado vai direto para o Dashboard
    header("Location: modules/dashboard/index.php");
} else {
    // Caso contrário, vai para a tela de login
    header("Location: login.php");
}
exit;
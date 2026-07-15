<?php
// includes/auth.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Trava o acesso para usuários não logados.
 */
function verificarLogin() {
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: /bibliotech/login.php");
        exit;
    }
}

/**
 * Valida se o usuário logado tem permissão para ver a página.
 * Exemplo de uso: verificarPerfil(['admin', 'bibliotecario']);
 */
function verificarPerfil(array $perfisPermitidos) {
    verificarLogin();
    if (!in_array($_SESSION['usuario_perfil'], $perfisPermitidos)) {
        // Redireciona para o dashboard se não tiver permissão
        header("Location: /bibliotech/modules/dashboard/index.php?erro=sem_permissao");
        exit;
    }
}
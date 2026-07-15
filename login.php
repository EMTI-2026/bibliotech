<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Se já estiver logado, vai direto para o painel
if (isset($_SESSION['usuario_id'])) {
    header("Location: modules/dashboard/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech - Login</title>
    <!-- CSS Global do Projeto -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- O integrante do Módulo 1 deve implementar o formulário de login aqui -->
    <h1>Bibliotech</h1>
    <p>Área de Desenvolvimento - Tela Inicial de Login</p>

</body>
</html>
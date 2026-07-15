<?php
require_once __DIR__ . '/auth.php';
verificarLogin(); // Garante que qualquer página que inclua o header exija login por padrão
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="/bibliotech/assets/css/style.css">
</head>
<body>
    <div class="app-container">
        <?php include __DIR__ . '/navbar.php'; ?>
        <main class="content">
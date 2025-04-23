<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nome?> - Página Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao <?=$nome?></h1>
        <nav>
            <a href="index.php">Página Principal</a>
            <a href="empresa.php">A Empresa</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
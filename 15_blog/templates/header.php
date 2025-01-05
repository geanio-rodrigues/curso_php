<?php 
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- ESTILOS DO PROJETO -->
    <link rel="stylesheet" href="<?=$BASER_URL?>css/styles.css">
    <!-- GOOGLE FONTES -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?=$BASER_URL?>" id="logo">
            <img src="<?=$BASER_URL?>img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?=$BASER_URL?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?=$BASER_URL?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
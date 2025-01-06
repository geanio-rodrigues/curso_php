<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA - INSERINDO DADOS COM PREPARED
    $nome = "Suporte de microfone";
    $descricao = "O suporte é novo e foi fabricado na china";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

    $stmt->execute();

?>
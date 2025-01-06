<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA
    $nome = "Teste";

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();

    $conn->close();
?>
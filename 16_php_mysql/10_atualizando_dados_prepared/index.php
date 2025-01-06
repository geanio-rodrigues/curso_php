<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA
    $id = 11;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Sofá";
    $descricao = "Sofá semi novo, com madeira de demolição";

    $stmt->bind_param("ssi", $nome, $descricao, $id);
    $stmt->execute();

    if($stmt->error) {
        echo "Erro: " . $stmt->error;
    }

    $conn->close();
?>
<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA
    $id = 11;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    print_r($result);
    echo "<br><br>";

    $item = $result->fetch_row();
    print_r($item);

    $conn->close();
?>
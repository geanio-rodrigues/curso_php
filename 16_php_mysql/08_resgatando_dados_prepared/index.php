<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA - RESGATANDO DADOS COM PREPARE
    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    print_r($result);
    echo "<br><br>";
    
    $data = $result->fetch_all();
    print_r($data);
?>
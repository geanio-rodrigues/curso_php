<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA - INSERINDO DADOS

    $table = "itens";
    $nome = "Xícara";
    $descricao = "É uma xícara usada de cor rosa";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);
    $conn->close();
?>
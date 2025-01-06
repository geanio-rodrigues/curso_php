<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    // ASSUNTO DA AULA - SELECIONANDO DADOS
    $q = "SELECT * FROM itens";

    $result = $conn->query($q);
    $conn->close();

    // UM RESULTADO
    $item = $result->fetch_assoc();

    // TODOS OS RESULTADOS
    $itens = $result->fetch_all();
    print_r($itens);
    echo "<b>Todos os resultados</b>";
    echo "<br><br>";
    print_r($item);
    echo "<b>Apenas um resultado</b>";
?>
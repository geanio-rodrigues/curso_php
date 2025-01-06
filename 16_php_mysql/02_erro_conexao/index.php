<?php 

    mysqli_report(MYSQLI_REPORT_OFF);
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophpa";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno) {
        echo "Erro na conexão! <br>";
        // echo "Erro: " . mysqli_connect_error();
        echo "Erro " . $conn->connect_error; // Forma orientada a objetos
    }
?>
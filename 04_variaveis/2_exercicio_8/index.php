<?php 

    $nome = "Geanio";
    $idade = 32;
    $programador = true;

    echo "Olá, meu nome é $nome, tenho $idade anos e ";

    if($programador) {
        echo "sou um programador!";
    } else {
        echo "não sou um programador!";
    }
    echo "<br>";
    
    //Aula
    echo "<br>Aula:<br>";

    $velocidade = 100; // inteiro
    $marca = "Ferrari"; // string
    $itens = ["Teto solar", "Motor 2.0", "Porta malas grande", "Piloto automático"]; // array

    echo $velocidade;
    echo "<br>";
    echo $marca;
    echo "<br>";
    print_r($itens);
?>
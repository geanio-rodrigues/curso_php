<?php 

    function defineCorCarro($modelo, $cor = "vermelha"){

        return "O carro $modelo é da cor $cor. <br>";

    }

    $carroVermelho = defineCorCarro("Fiat");
    $carroAzul = defineCorCarro("Corsa", "azul");

    echo $carroVermelho;
    echo $carroAzul;
?>
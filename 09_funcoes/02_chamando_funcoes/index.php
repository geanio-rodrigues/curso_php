<?php 

    // definindo função
    function soma() {

        $a = 5; 
        $b = 4;

        echo $a + $b . "<br>";

    }

    // chamando / invocando função
    soma();
    soma();

    // função php
    echo strtoupper("testando função");
    echo "<br>";

    // como a função acima não funciona em acentos, pode ser substituída por outra função
    $texto = "testando função";
    echo mb_strtoupper($texto, 'UTF-8');
    // ou mb_strtoupper("testando função", 'UTF-8');
?>
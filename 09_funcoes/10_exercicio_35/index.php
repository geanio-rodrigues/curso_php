<?php 

    function quadrado($num) {
        return $num ** 2;
    }

    $a = 8;
    $x = quadrado($a);

    echo "$a ao quadrado é: $x <br>";
    echo "2 ao quadrado é: " . quadrado(2) . "<br>";

?>
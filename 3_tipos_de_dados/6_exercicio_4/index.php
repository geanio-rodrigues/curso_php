<?php 

    $a = 125.56;
    $b = -5.69;

    echo 46.8;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo "$b <br>";

    if(is_float($b)) {
        echo "$b é float! <br>";
    }

    // Aula
    echo "<br>Aula:<br>";
    echo 4.15;
    echo "<br>";
    echo 12.12;
    echo "<br>";

    $c = -78.1;

    echo $c;
    echo "<br>";

    if(is_float($c)) {
        echo "Sim, podemos ter floats negativos!";
    }

    if (is_int($c)) {
        echo "É um inteiro!";
    }
?>
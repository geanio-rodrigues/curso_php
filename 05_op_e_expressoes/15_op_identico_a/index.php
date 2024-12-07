<?php 

    if(5 == "5") {
        echo "5 é 5 1<br>";
    }
    
    // op de idêntico
    if(5 === "5") {
        echo "5 é 5 2<br>";
    }
    
    if(5 === 5) {
        echo "5 é 5 3<br>";
    }
    
    if(3 === "teste") {
        echo "5 é 5 4<br>";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if($a === $b) {
        echo "A é igual a B <br>";
    }
    
    if($a === $c) {
        echo "A é igual a C <br>";
    }

?>
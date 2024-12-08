<?php 

    $arr = [1, false, "Geanio", "48", 56.4, "Olá!", "458.5", "true", true, 468, "fim"];

    $cont = count($arr);
    $indice = 0;

    while($cont > 0) {
        if(is_string($arr[$indice])){
            echo $arr[$indice] . "<br>";
        }

        $cont--;
        $indice++;
    }
?>
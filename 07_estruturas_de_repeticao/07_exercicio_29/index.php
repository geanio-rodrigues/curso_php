<?php 
    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $cont = count($arr);
    $indice = 0;

    while($cont > $indice) {

        if($arr[$indice] == 30 || $arr[$indice] == 40) {
            $indice++;
            continue;
        }

        echo $arr[$indice] . "<br>";

        $indice++;
    }

    //Aula
    echo "<br>Aula:<br>";

    $i = 0;

    while($i < count($arr)){

        $numeroAtual = $arr[$i];

        if($numeroAtual == 30 || $numeroAtual == 40) {
            $i++;
            continue;
        }

        echo "Elemento: $numeroAtual <br>";

        $i++;
    }
?>
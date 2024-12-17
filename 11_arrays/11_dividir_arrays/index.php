<?php 

    $arr = range(1, 20);

    print_r(array_chunk($arr, 4));
    echo "<br>Array inteiro de 1 à 20. Dividido em 4 elementos cada<br><br>";

    $arrays = array_chunk($arr, 10);

    print_r($arrays);
    echo "<br>Dividido em 10 elementos<br><br>";

    print_r($arrays[1]);
    echo "<br>Apenas o segundo array, da divisão de 10 elementos.";

?>
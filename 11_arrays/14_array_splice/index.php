<?php 

    // RESGATAR ELEMENTOS DE ARRAY
    // REMOVER ELEMENTOS
    
    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo " - Array depois da remoção<br>";

    print_r($removidos);
    echo " - Removidos<br><br>";

    $arr2 = range(1, 6);

    $removidos2 = array_splice($arr2, 3);

    print_r($arr2);
    echo " - Array depois da remoção<br>";

    print_r($removidos2);
    echo " - Removidos<br><br>";


    $arr3 = range(1, 6);

    $removidos3 = array_splice($arr3, 1, -1);

    print_r($arr3);
    echo " - Array depois da remoção<br>";

    print_r($removidos3);
    echo " - Removidos<br><br>";
?>
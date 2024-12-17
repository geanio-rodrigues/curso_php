<?php 

    $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

    $removidos = array_splice($arr, 2, 2);

    print_r($arr);
    echo " - Array depois de removido<br>";
    print_r($removidos);
    echo " - itens removidos<br><br>";

    // outra forma de fazer a mesma romação
    $arr2 = ["batata", "maçã", "pera", "feijão", "arroz"];

    array_splice($arr2, 2, -1);
    // caso não coloque em nenhuma variável, eles serão removidos da mesma foram, só não podemos resgatar os itens removidos depois.

    print_r($arr2);
    echo " - Array depois de removido<br>";
?>
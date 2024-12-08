<?php 
    $arr = [];

    for ($i=0; $i < 10; $i++) { 
        # code...
        $arr[$i] = $i + 1;
    }

    print_r($arr);
    echo "<br>";

    // Aula
    echo "<br>Aula: <br>";

    $arr2 = [];

    for($i = 1; $i <= 10; $i++) {

        array_push($arr2, $i);

    }

    print_r($arr2);
?>
<?php 

    $arr = [
        ["carro", "moto", "ônibus", "skate"],
        [32, 45, 85, 69],
        [true, "teste", 12, 458.26]
    ];

    $i = 1; // variável para exibir qual array está sendo impresso.

    // loop no array externo
    foreach($arr as $array){

        echo "{$i}º Array: <br>";
        $a = 0;

        // loop nos arrays internos e imprimindoo cada um
        foreach($array as $item){

            if($item === true){
                $item = "true";
            }

            if($a == 0){
                echo "({$item}, ";
            } elseif($a + 1 == count($array)){
                echo "{$item})<br>";
            } else {
                echo "{$item}, ";
            }

            $a++;
        }

        $i++;
    }
?>
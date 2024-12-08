<?php 
    $arr = [];

    for($i = 10; $i <= 20; $i++) { 
        # code...
        array_push($arr, $i);
    }

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 != 0){
            echo "Elemento: $arr[$i] <br>";
        }
    }
?>
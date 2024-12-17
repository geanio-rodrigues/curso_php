<?php 

    $str = "carro - navio - helicóptero - barco - jangada";

    $strArr = explode(" - ", $str);

    var_dump($strArr);

    echo "<br>";
    
    foreach($strArr as $palavra){
        echo "{$palavra}<br>";
    }
?>
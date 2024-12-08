<?php

use function PHPSTORM_META\type;

    $num = 15;
    $str = "Geanio";
    $bol = false;

    if(is_int($num)) {
        echo "$num é do tipo inteiro! <br>";
    } else {
        echo "$num não é do tipo inteiro, é do tipo ". gettype($num) ."<br>";
    }

    if(is_int($str)) {
        echo "$str é do tipo inteiro! <br>";
    } else {
        echo "$str não é do tipo inteiro, é do tipo ". gettype($str) ."<br>";
    }

    if(is_int($bol)) {
        echo "$bol é do tipo inteiro! <br>";
    } else {
        echo "$bol não é do tipo inteiro, é do tipo ". gettype($bol) ."<br>";
    }

?>
<?php 

    $str = "Cadê o meu queijo? Ele estava aqui em cima";

    $queijo = substr($str, 12, 6);

    echo $queijo . "<br>";

    $estava = substr($str, 24, -13);
    
    echo $estava;
?>
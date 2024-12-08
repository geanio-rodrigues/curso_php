<?php 

    if(5 > 2) {
        
        echo "Entrou no if <br>";
    
    } else {

        echo "Entrou no else <br>";

    }
    
    if("teste" === 5) {
        
        echo "Entrou no if 2 <br>";
    
    } else {

        echo "Entrou no else 2 <br>";

    }

    // variáveis
    $a = 10;
    $b = 20;

    if($a > $b) {

        echo "Entrou no if 3 <br>";

    } else {

        echo "Entrou no else 3 <br>";

    }

    $msg1 = "Entrou no if 4 <br> ";
    $msg2 = "Entrou no else 4 <br>";

    if($a > $b) {

        echo $msg1;

    } else {

        echo $msg2;
    
    }
?>
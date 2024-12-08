<?php 

    $idade1 = 13;
    $idade2 = 18;
    $idade3 = 32;

    $maiorIdade = 18;

    $msg1 = "Você é maior de idade! <br>";
    $msg2 = "Você não é maior de idade! <br>";

    if($idade1 >= $maiorIdade){
        echo $msg1;
    } else {
        echo $msg2;
    }
    
    if($idade2 >= $maiorIdade){
        echo $msg1;
    } else {
        echo $msg2;
    }

    if($idade3 >= $maiorIdade){
        echo $msg1;
    } else {
        echo $msg2;
    }

?>
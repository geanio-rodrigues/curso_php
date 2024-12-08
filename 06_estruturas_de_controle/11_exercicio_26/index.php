<?php 
    $velocidade = 50;
    $limiteVelocidade = 40;

    if($velocidade < $limiteVelocidade) {
        echo "Está dentro da velocidade permitida! <br>";
    }else if($velocidade == $limiteVelocidade) {
        echo "Está no limite máximo de velocidade! Cuidado! <br>";
    } else {
        echo "Ultrapasou o limite de velocidade! Você foi multado! <br>";
    }
?>
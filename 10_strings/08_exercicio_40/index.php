<?php 

    $frase = "O rato roeu a ropa do rei de Roma";
    $totA = 0;

    for($i = 0; $i < strlen($frase); $i++){
        if(strtolower($frase[$i]) == 'a'){
            $totA++;
        }
    }

    echo "Na frase: {$frase}<br>
    Temos um total de {$totA} letras A!";
?>
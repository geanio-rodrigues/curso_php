<?php 

    $str = "Esta é uma string muito grande, ela tem vários caracteres";

    // como a frase contém acentas, as letras não serão impressas corretamente
    for($i = 0; $i < strlen($str); $i++){

        echo "$str[$i] - ";
        
    }

    echo "<br>";

    // pode ser usada a função abaixo, para corrigir o erro com os acentos

    mb_internal_encoding('UTF-8'); // Garante que o PHP entenda a codificação correta

    for($i = 0; $i < mb_strlen($str); $i++){
        echo mb_substr($str, $i, 1) . "<br>";
    }
?>
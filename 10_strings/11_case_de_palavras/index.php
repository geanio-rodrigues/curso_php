<?php 

    $frase = "testando o case de uma palavra. <br>";
    $frase2 = "Testando o case de uma palavra. <br>";
    $frase3 = "testando ô case de uma palavra. <br>";
    $frase4 = "é mais um teste. <br>";

    // nenhum dos dois funciona com acentos

    // Primeira letra em maiúsculo
    echo ucfirst($frase);
    echo ucfirst($frase2);

    // Todas as palavras com as iniciais maiúsculas
    echo ucwords($frase3);
    echo ucwords($frase2);

    // Uma forma de fazer funcionar com acentos é usar a função abaixo
    echo "<br>";
    echo mb_convert_case($frase3, MB_CASE_TITLE); // semelhante ao ucwords
    // ainda procurando como fazer no caso da $frase4, apenas a primeira letra com acento virar maiúscula.

?>
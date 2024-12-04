<?php 

    echo                                   "testando espaço em branco <br>";
    echo "testando espaço <br>"                  ;
    
    echo
    "quebra de linha <br>"
    ;

    echo "quebra de linha <br>"
    ;
    
    /*
    Dessa forma a quebra de linha afeta o código, pois não vai reconhecer "ec" e nem "ho"
    ec
    ho "quebra de linha <br>"
    ;

    Aqui também o espaçamento vai gerar erro no código "ec" está separado 
    ec ho "quebra de linha <br>";
    */

    echo
    "quebra de
    linha <br>"
    ;

?>
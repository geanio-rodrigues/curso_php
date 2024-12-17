<?php 

    $carro = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

    list($modelo, $motor, $cor, $tamanhoAro, $tipoTeto, $cambio) = $carro;

    echo "O carro do modelo {$modelo} " . number_format($motor, 1, '.', '') . " da cor {$cor}. Tem aro nº {$tamanhoAro}, {$tipoTeto} e câmbio {$cambio}";
?>
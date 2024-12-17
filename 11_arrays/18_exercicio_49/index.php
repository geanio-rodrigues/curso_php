<?php 

    $nome = "Celular";
    $armazenamento = 64;
    $modelo = "iPhone 11";
    $cor = "Branco";
    $marca = "Apple";
    $porcentagemBateria = 82;
    
    $objeto = compact("nome", "marca", "modelo", "armazenamento", "cor", "porcentagemBateria");

    print_r($objeto);
    echo "<br>";

    foreach($objeto as $caracteristica => $valor){
        echo "{$caracteristica}: {$valor}<br>";
    }
?>
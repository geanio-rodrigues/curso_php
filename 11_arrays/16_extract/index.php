<?php 

    $arr = [
        "cor" => "vermelho",
        "forma" => "retângular",
        "material" => "aço"
    ];

    extract($arr);

    echo "{$cor}<br>
    {$forma}<br>
    {$material}<br>";

    $nome = "Matheus";

    $pessoa = [
        "nome" => "João",
        "idade" => 29
    ];

    echo "{$nome}<br>";

    extract($pessoa);

    echo "{$nome}<br>
    {$idade}<br>";
?>
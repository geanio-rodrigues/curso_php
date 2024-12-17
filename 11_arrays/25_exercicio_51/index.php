<?php 

    $atletas = [
        "Carlos" => 23,
        "Daniel" => 12,
        "Henrique" => 46,
        "Pedro" => 37,
        "Nicolas" => 29
    ];

    arsort($atletas);
?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($atletas as $nome => $pontuacao):?>
        <li><?=$nome?>: <?=$pontuacao?> pontos.</li>
    <?php endforeach;?>
</ol>
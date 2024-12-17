<?php 

    $pessoas = [
        "Geanio" => 32,
        "Pedro" => 35,
        "Giovanna" => 14,
        "Hugo" => 25,
        "Rony" => 44
    ];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?=$nome?></td>
            <td><?=$idade?></td>
        </tr>
    <?php endforeach; ?>
</table>


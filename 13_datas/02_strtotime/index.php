<?php 

    $cincodias = strtotime("5 days");

    echo "{$cincodias}<br>";

    $dezdias = strtotime("10 days");

    echo $dezdias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincodias);

    echo $dataAtualMais5 . "<br>";

    $dataAtualMais10 = date('d/m/y', $dezdias);

    echo $dataAtualMais10 . "<br>";

    $doisMeses = strtotime("2 months");

    echo $doisMeses . "<br>";

    $dataAtualMaisDoisMeses = date('d/y/m', $doisMeses);

    echo $dataAtualMaisDoisMeses . "<br>";

    $dozeAnos = strtotime("12 years");

    echo date('d/m/y', $dozeAnos);
?>
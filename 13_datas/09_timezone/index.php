<?php 

    date_default_timezone_set('America/Sao_Paulo');

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    echo $data->format("d F Y");
?>
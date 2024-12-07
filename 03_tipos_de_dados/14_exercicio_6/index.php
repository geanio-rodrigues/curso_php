<?php 

    $carro = ['marca' => 'Nissan', 'modelo' => 'Frontier', 'câmbio' => 'Manual', 'cor' => 'Prata'];

    print_r($carro);
    echo "<br>";
    echo "O carro ". $carro['modelo'] ." da marca ". $carro['marca'] ." tem câmbio ". $carro['câmbio'];
    echo "<br>";


    // Aula
    echo "<br>Aula:<br>";

    $carro2 = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindado' => false
    ];

    print_r($carro);

    $marca = $carro2['marca'];
    $velocidade_maxima = $carro2['velocidade_max'];

    echo "<br>";

    echo "O carro é da marca $marca e atinge no máximo $velocidade_maxima km/h";

?>
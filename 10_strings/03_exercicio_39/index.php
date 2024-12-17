<?php 

    function itensAcimaDez($arr) {

        $arrItensAcimaDez = [];

        foreach($arr as $item => $preco) {

            if($preco > 10) {
                array_push($arrItensAcimaDez, $item);
            }
        }

        return $arrItensAcimaDez;
    }

    $itens = [
        'carro' => 39000,
        'sofá' => 280,
        'cafeteira' => 35,
        'colher' => 0.8,
        'copo' => 2.5
    ];

    $novoArr = itensAcimaDez($itens);

    print_r($novoArr);
?>
<?php 

    class Cachorro{

        function latir(){
            echo "Au, au!<br>";
        }

        function andar($m){
            echo "O cachorro andou {$m}m.<br>";
        }
    }


    $pitbull = new Cachorro;
    $pastorAlemao = new Cachorro;

    $pitbull->latir();
    $pitbull->andar(2);

    echo "<br>";

    $pastorAlemao->andar(1);
    $pastorAlemao->latir();
    $pastorAlemao->andar(3);
?>
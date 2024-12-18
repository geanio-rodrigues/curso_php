<?php 

    class Pessoa {
        public $nome;
        public $idade = 15;

        function andar($p, $d = "frente"){
            echo "Andando {$p} passos para {$d}<br>";
        }
    }

    $geanio = new Pessoa;
    $carlos = new Pessoa;

    $geanio->nome = "Geanio";
    $geanio->idade = 32;

    $carlos->nome = "Carlos";

    echo "Olá, me chamo {$geanio->nome}! Tenho {$geanio->idade} anos.<br>";

    echo "{$carlos->nome} {$carlos->idade}<br>";

    $geanio->andar(6);
    $carlos->andar(3, "trás");

?>
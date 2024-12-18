<?php 

    class Cachorro {

        public $nome;
        public $raca;
        public $idade;

        function __construct($nome, $raca, $idade){
            
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
        }

        public function mostrarNome(){
            echo "O nome do Cachorro é {$this->nome}<br>";
        }
    }

    $rock = new Cachorro("Rock", "Vira-lata", 3);

    $rock->mostrarNome();
    echo "{$rock->raca}<br>";

    $jack = new Cachorro("Jack", "Pastor Alemão", 1);

    $jack->mostrarNome();
    echo "{$jack->raca}<br>";
?>
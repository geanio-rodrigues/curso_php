<?php 

    class Car {

        public $rodas = 4;
        public $cor;
        public $velocidadeMaxima = 140;

        function setVelocidadeMaxima($veloMax){
            return $this->velocidadeMaxima = $veloMax;
        } 

        function getVelocidadeMaxima(){
            echo "Velocidade máxima de {$this->velocidadeMaxima}km/h.<br>";
        }
    }

    $fiat = new Car;
    $ferrari = new Car;

    $ferrari->setVelocidadeMaxima(300);
    $ferrari->getVelocidadeMaxima();

    $fiat->getVelocidadeMaxima();
?>
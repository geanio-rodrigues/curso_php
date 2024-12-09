<?php 

    function parImpar($num) {

        if($num % 2 == 0) {
            echo "O número $num é par!<br>";
        } else {
            echo "O número $num é ímpar!<br>";
        }
    }

    parImpar(2);
    parImpar(64);
    parImpar(33);
    parImpar(21);
    parImpar(12);

?>
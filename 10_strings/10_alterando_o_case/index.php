<?php 

    $str = "esta string está em caixa baixa. <br>";

    // echo strtoupper($str);
    // para que seja feito também, com as letras acentuadas
    echo mb_strtoupper($str);

    $str2 = "E ESTA AQUI EM CAIXA ALTA. <br>";

    echo strtolower($str2);
?>
<?php 

    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function listaParaString($arr){
        $str = "Você levou os seguintes itens do mercado: ";
        $i = 0;
        foreach($arr as $item){
            $i++;
            if($i == count($arr)){
                $str .= "$item.";
            }else {
                $str .= "$item, ";
            }
        }

        return $str;
    }

    echo listaParaString($lista);
?>
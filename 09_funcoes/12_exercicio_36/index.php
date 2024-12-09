<?php 

    function maiorSete($arr) {
        $novo = [];

        foreach ($arr as $num) {
            if($num > 7){
                array_push($novo, $num);
            }
        }

        return $novo;
    }


    $arr2 = [93, 1, 2, 4, 5, 10, 32, 48, 7];

    $novo = maiorSete($arr2);
    var_dump($novo);
    echo "<br>";


    // Aula
    $arr = [];

    for($i = 0; $i <= 30; $i++) {
  
      array_push($arr, $i);
  
    }
  
    // print_r($arr);
  
    function arrayMaiorQueSete($array) {
  
      $arrayRetorno = [];
  
      for($j = 0; $j < count($array); $j++) {
  
        if($array[$j] > 7) {
  
          array_push($arrayRetorno, $array[$j]);
  
        }
  
      }
  
      return $arrayRetorno;
  
    }
  
    $novoArray = arrayMaiorQueSete($arr);
  
    print_r($novoArray);
?>
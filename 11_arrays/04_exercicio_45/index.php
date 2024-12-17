<?php 

    $arr = range(10, 45);

    foreach($arr as $num){

        if($num + 6 > 30){
            echo "O número $num é muito alto!<br>";
        } else {
            echo $num + 6 . "<br>";
        }
    }
?>
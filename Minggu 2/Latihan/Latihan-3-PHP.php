<?php
    echo "Bilangan Prima [ ";

    for($i=1; $i<=50;$i++){
        $value = 0;

        for($j=1; $j<=$i;$j++){
            if($i % $j == 0){
                $value++;
            }
        }

        if($value == 2){
            echo $i . ", ";
        }
    }
    echo " ]"
?>
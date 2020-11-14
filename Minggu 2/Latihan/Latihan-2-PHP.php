<?php
    $arr = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
    
    for($i = 0; $i < count($arr); $i++) {
        $key = $i;
        for($j=$i+1; $j < count($arr); $j++){
            for($k=0; $k < strlen($arr[$j]); $k++){
                if($arr[$j][$k] < $arr[$key][$k]){
                    $key = $j;
                break;
                }elseif($arr[$j][$k] > $arr[$key][$k]){
                break;
                }
            }
        }
    

        $temp = $arr[$i];
        $arr[$i] = $arr[$key];
        $arr[$key] = $temp;
    }
    echo "Hasil Dari pengurutan : [ "; 
    foreach($arr as $data){
        echo $data . ", ";
    }
    echo " ]";

?>
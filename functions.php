<?php
    function printArr($arr){
        for($i = 0; $i < sizeof($arr); $i++) {
            echo "number: $arr[$i] <br>";
        }
    }

    function largest ($arr){
        $max = $arr[0];

        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i] > $max){
                $max = $arr[$i];
            }
        }
        return $max;
    }

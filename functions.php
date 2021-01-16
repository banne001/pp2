<?php
    /**
     * Print the elements that is given in the array
     * @param array $arr The array to print the elements
     */
    function printArr($arr){
        for($i = 0; $i < sizeof($arr); $i++) {
            echo "number: $arr[$i] <br>";
        }
    }

    /**
     * Checks the largest number in the array
     * @param array $arr The array of integers to check from
     * @return int $max returns the largest number in the array
     */
    function largest ($arr){
        $max = $arr[0];

        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i] > $max){
                $max = $arr[$i];
            }
        }
        return $max;
    }
    /**
     * Removes duplicates
     * Creates an array. Loops through the given array and checks
     * adds any element that is not contained in the created array
     * @param array $arr The array of integers to remove duplicates from
     * @return array $result returns the array without any duplicates
     */
    function removeDups($arr){
        $result = [];
        for($i = 0; $i < sizeof($arr); $i++){
            if(!in_array($arr[$i], $result)){
                array_push($result, $arr[$i]);
            }
        }
        printArr($result);
        return $result;

    }

    /**
     * Distribute the elements in the array to an associative array. Where the key is the number
     * and the value is the number of times the number appears in the array
     * @param array $arr Array to distribute elements from
     * @return array $result An associative array. key is the number and value is the number
     *          of occurrences in the array
     */
    function distribution($arr){
        $result[$arr[0]] = 1;
        for($i = 1; $i < sizeof($arr); $i++){
            if(!array_key_exists(($arr[$i]), $result)){
                $result[$arr[$i]] = 1;
            } else {
                $result[$arr[$i]] = $result[$arr[$i]]+1;
            }
        }
        ksort($result, 1);
        foreach ($result as $number => $dups){
            echo "<br> $number => $dups";
        }
        return $result;
    }

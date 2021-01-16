<?php
/**
 * Pair Program 2
 * name: Blezyl Santos and Safal A
 * Date: 1/15/2021
 * git: https://github.com/banne001/pp2.git
 * url: http://blezylsantos.greenriverdev.com/328/pp2/
 */
// Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include ('functions.php');
?>

<?php
    echo "PHP Array Practice";

    echo "<br>Second Task: Print an Array<br>";
    $numbers = array(7, 9, 8, 9, 8, 8, 6);
    printArr($numbers);

    echo "<br>Fourth task: largest numbers in the array is: " . largest($numbers);

    echo "<br><br>Fifth Task: Removed Duplicates<br>";
    removeDups($numbers);

    echo "<br>Sixth Task: Distribute the elements in the array to an associative array. Where the key 
            is the number and the value is the number of times the number appears in the array<br>";
    $dist = distribution($numbers);

?>

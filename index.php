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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>pp2</title>
</head>
<body>
    <div class="container">


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
    </div>
</body>
</html>
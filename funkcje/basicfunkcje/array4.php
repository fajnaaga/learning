<?php
// Create function "showAllElements" that accept 1 argument $array and display every element of this array
// Stwórz funkcję "showAllElements" która przyjmuje 1 argument $array i wyświetla każdy element tej tablicy

// Create function "multiplyBy2" that accept 1 argument $array with only numbers and multiply every element of this array by 2 and display the result
// Stwórz funkcję "multiplyBy2" która przyjmuje 1 argument $array z samymi liczbami i mnoży każdy element tej tablicy przez 2 i wyświetla rezultat
function ShowAllElements ($array) {
    foreach ($array as $x) {
        echo "$x <br>";
}
}
// ShowAllElements([2,5,7,9,11,13]);


function multiplyBy2 ($array) {
    foreach($array as $z) {
        if (!is_numeric($z)){
echo "Error: array should have only numbers";
return;
        }
    }
    foreach($array as $x) {
        echo $x * 2 . "<br>";
    }

    }

multiplyBy2([2,5,7,13,23,34]);
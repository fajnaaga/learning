<?php
// Create function "showAllElements" that accept 1 argument $array and display every element of this array
// Stwórz funkcję "showAllElements" która przyjmuje 1 argument $array i wyświetla każdy element tej tablicy
function ShowAllElements ($array) {
    foreach ($array as $x) {
        echo "$x <br>";
}
}
ShowAllElements([2,5,7,9,11,13]);

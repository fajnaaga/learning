<?php
// Create function "showAllNumbers" that accept 1 argument $max and display all numbers from 0 to $max
// Stwórz funkcję "showAllNumbers" która przyjmuje 1 argument $max i wyświetla wszystkie liczby od 0 do $max
function showAllNumbers($max) {
    for ($x = 0; $x <=$max; $x++) {
        echo "The number is: $x<br>";
    }
}
// showAllNumbers(7);

// Create function "showEvenNumbers" that accept 1 argument $max and display all even numbers from 0 to $max
// Stwórz funkcję "showEvenNumbers" która przyjmuje 1 argument $max i wyświetla wszystkie parzyste liczby od 0 do $max

function showEvenNumbers($max) {
    for ($x = 0; $x <= $max; $x++) {
           if ($x % 2 === 0) {
        echo "$x <br>";
        } 
    }
}
showEvenNumbers(23);
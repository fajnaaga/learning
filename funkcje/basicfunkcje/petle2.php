<?php
// Create function "showNumbersToZero" that accept 1 argument $start and display all numbers from $start to 0
// Stwórz funkcję "showNumbersToZero" która przyjmuje 1 argument $start i wyświetla wszystkie liczby od $start do 0
// showNumbersToZero(5); // 5, 4, 3, 2, 1, 0
// showNumbersToZero(10); // 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0

// showNumbersToZero(0); // 0
// showNumbersToZero(-5); // -5, -4, -3, -2, -1, 0

function showNumbersToZero ($start) { 
    if (!is_numeric($start)) {
        echo "Error: start is not a number";
        return;
    }
    
    if ($start >=0 ) {
        for ($index = $start; $index >= 0; $index--) 
        { 
            echo $index . "<br>";
        }
    } else {
        for($index = $start; $index <= 0; $index++)
        {
           echo $index . "<br>";
        }
    } 
}
showNumbersToZero(7) ;
showNumbersToZero(0) ;
showNumbersToZero(-7) ;
showNumbersToZero("test");
// https://www.w3schools.com/php/func_var_is_numeric.asp

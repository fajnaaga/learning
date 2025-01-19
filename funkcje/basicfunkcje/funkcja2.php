<?php 
function Welcome($name = "John") {
    echo "Welcome " . $name. "<br>";
}
Welcome();
Welcome("Kasia");

// Deklaracja funkcji
function isEven($number) {
    if ($number % 2 == 0) {
        return "true";
  }
    else {
        return "false";
    }
} 
isEven(10);
isEven(7);
echo isEven(10);
echo isEven(7);

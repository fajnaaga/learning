<?php 
function hello() {
    echo "hello world";
}
// hello();


function helloUser($name) {
    echo "welcome " . $name . "<br>";

}
helloUser("Piotrek");
helloUser("Paweł");

function addNumbers($number1, $number2) {
// echo "addNumbers" . $number1 + $number2;
return $number1 + $number2;
}
echo addNumbers(7, 5) . "<br>";



function multiplaynumbers($number1, $number2) {
    return $number1 * $number2;
}
echo multiplaynumbers(3, 4) . "<br>";

function dividenumbers($number1, $number2) {
    return $number1/ $number2;
}
echo dividenumbers(12, 4);

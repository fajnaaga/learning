<?php 
// Create function "multiplyBy4" that accept 1 argument $array with only numbers and multiply every element of this array by 4 and display the result
// Stwórz funkcję "multiplyBy4" która przyjmuje 1 argument $array z samymi liczbami i mnoży każdy element tej tablicy przez 4 i wyświetla rezultat

function multiplyBy4($array) {
    foreach($array as $z){ 
        echo $z *4 . "<br>";
    }
}
multiplyBy4([2,4,6,8,10,12]);


function multiplyBy8($array) {
    foreach($array as $z){
        echo $z *8 . "<br>";
    }
}
multiplyBy8([2,4,6,8,10,12]);
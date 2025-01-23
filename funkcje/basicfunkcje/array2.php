<?php
// Create function "showPersonDetails" that accept 1 argument $person and display name, age and city of person
// Use $person1 and $person2 arrays from previous task :)

// Stwórz funkcję "showPersonDetails" która przyjmuje 1 argument $person i wyświetla imię, wiek i miasto osoby
// Użyj tablic $person1 i $person2 z poprzedniego zadania :)

function showPersonDetails($person) { 
echo $person["name"]. "<br>" ;
echo $person['age']. "<br>";
echo $person['city']. "<br>";

}

$person1 = [
    "name" => "Franciszek",
    "age" => "37",
    "city" => "Londyn",
  ];

$person2 = [
    "name" => "Faustyna",
    "age" => "34",
    "city" => "Gliwice",
];
showPersonDetails($person1);
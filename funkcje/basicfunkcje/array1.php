<?php 
// Create array with 4 example fruits and display every element
// Stwórz tablicę z 4 przykładowymi owocami i wyświetl każdy element

// #2
// Create 2 arrays $person1 and $person2 with keys: name, age and city and display city of every person
// Stwórz 2 tablice $person1 i $person2 z kluczami: name, age i city i wyświetl miasto każdej osoby

$fruits=["apple", "orange", "raspberry", "strawberry"];
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";
echo $fruits[3] . "<br>";

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

echo $person1["city"] . "<br>";
echo $person2["city"];
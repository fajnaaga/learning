<?php
// Create function "showPersonDetails" that accept 1 argument $person and display name, age and city of person
// Use $person1 and $person2 arrays from previous task :)

// Stwórz funkcję "showPersonDetails" która przyjmuje 1 argument $person i wyświetla imię, wiek i miasto osoby
// Użyj tablic $person1 i $person2 z poprzedniego zadania :)

// Modify function "showPersonDetails" to do not display person values if this value do not exist
// Zmodyfikuj funkcję "showPersonDetails" aby nie wyświetlała wartości osoby jeśli ta wartość nie istnieje

function showPersonDetails($person) { 
    if (array_key_exists('name',$person)) {
        echo $person['name']. '<br>' ;
    }
    if (array_key_exists('age',$person)) {
        echo $person['age']. '<br>';
    }
    if (array_key_exists('city',$person)) {
        echo $person['city']. '<br>';
    }
}

$person1 = [
    'name' => 'Franciszek',
    'age' => '37',
//   'city' => 'Londyn',  
  ];

$person2 = [
    'name' => 'Faustyna',
    'age' => '34',
    'city' => 'Gliwice',
];
showPersonDetails($person1);


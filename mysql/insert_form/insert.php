<?php
    // password DA319g1c2n5wgXEb
    $server_name = "localhost";
    $user_name = "database_2";
    $password = "DA319g1c2n5wgXEb";
    $database = "database_2"; 

    $connection = mysqli_connect($server_name, $user_name, $password, $database); 
    if (!$connection) {
        die("connection failed" . mysqli_connect_error());
    }

    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $vocation = $_GET['vocation'];
    $age = $_GET['age'];
    $city = $_GET['city'];

    $query = "INSERT INTO people (`name`, `surname`, `vocation`, `age`, `city`)
        VALUES ('$name', '$surname', '$vocation', '$age', '$city')";
    mysqli_set_charset($connection, 'utf8');
    if (mysqli_query($connection, $query)) {
        echo "nowy rekord zapisany";
    } else {
        echo "ERROR";
        echo "<br>";
        echo mysqli_error($connection);
        
    }
    mysqli_close($connection);
    ?>
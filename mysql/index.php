<html>
    <head>
        <meta charset="UTF-8">
    </head>

<body> 
    Język polski
<?php
    echo 'wpisuję coś';
    // password DA319g1c2n5wgXEb
    $server_name = "localhost";
    $user_name = "database_2";
    $password = "DA319g1c2n5wgXEb";
    $database = "database_2"; 

    $connection = mysqli_connect($server_name, $user_name, $password, $database); 
    if (!$connection) {
        die("connection failed" . mysqli_connect_error());

    }
    $query = "SELECT * FROM people";
    mysqli_set_charset($connection, 'utf8');
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_all($result);
    print_r($data);

    mysqli_close($connection);
    ?>
    </body></html>
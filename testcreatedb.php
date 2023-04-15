<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = ""; 

    //Procedural
    $connection = mysqli_connect($host, $username, $password);
    if (!$connection) 
    {
        die("Connection Unsucessful: " . mysqli_connect_error());
    }

    $query = "CREATE DATABASE admission";
    if (mysqli_query($connection, $query)) 
    {
        echo "Database created!";
    } 
    else 
    {
        echo "Database Creation Failed" . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>
<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="admission";
    //Procedural
    $connection = mysqli_connect($host, $username, $password,$dbname);
    if (!$connection) 
    {
        die("Connection Unsucessful: " . mysqli_connect_error());
    }
    $query = "CREATE TABLE candidates (
        names VARCHAR(30) NOT NULL,
        email VARCHAR(45) PRIMARY KEY,
        phone VARCHAR(30) NOT NULL,
        course1 VARCHAR(45),
        course2 VARCHAR(45),
        marks1 VARCHAR(45),
        marks2 VARCHAR(45))";
    if (mysqli_query($connection, $query)) 
    {
        echo "Table created!";
    } 
    else 
    {
        echo "Table Creation Failed" . mysqli_error($connection);
    }
    mysqli_close($connection);
?>
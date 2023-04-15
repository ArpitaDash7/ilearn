<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="admission";
    //Procedural
    $connection = mysqli_connect($host, $username, $password,$dbname);
    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    $query = "DELETE from candidates where names='Anuradha Dash'";
    if (mysqli_query($connection, $query)) 
    {
        echo "Deletion succesful!";
    } 
    else 
    {
        echo "Deletion Failed" . mysqli_error($connection);
    }
    mysqli_close($connection);
?> 
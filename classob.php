<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="flight db";
    $emailid=$_POST['username'];
    $passwords=$_POST['password'];

    //$storedname='';
    //Procedural
    $connection = mysqli_connect($host, $username, $password,$dbname);
    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT email, pass  FROM registerstu where email='$emailid' and pass='$passwords'";
    if (!mysqli_query($connection, $query)) 

    {
        echo "Select Query" . mysqli_error($connection);
    }
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<script>alert("Welcome to ilearn")</script>';
           include 'studenthom.html';
        }
    } 
    else 
    {
       
        include 'loginhar.html';
        
    }
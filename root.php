<?php
$servername="localhost";
$username="root";
$password="";

//create connection
$conn= new mysqli($servername, $username, $password);

//check connecction
if( $conn->connect_error)
{
  die("Connection failed:".$conn->connect_error);
}
echo "connected successfully";
?>
<?php
$names= $_POST['names'];
$email=$_POST['email'];
$passwords=$_POST['passwords'];

echo $names;
echo $email;
echo $passwords;

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname="e-learning";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
$query = "INSERT INTO registerstu VALUES ('$names','$email','$passwords')";

if (mysqli_query($connection, $query)) 
{
    echo '<script>alert("Welcome to ilearn")</script>';
           include 'studenthom.html';
} 
else 
{
    echo "Insertion Failed" . mysqli_error($connection);
}
mysqli_close($connection);
?>
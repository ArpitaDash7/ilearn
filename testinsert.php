<?php
// $names= $_POST['name'];
$host = "localhost";
$username = "root";
$password = "";
$dbname="admission";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}

$names= $_POST['stuname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$course1=$_POST['course1'];
$course2=$_POST['course2'];
$tenth=$_POST['tenth'];
$twelth=$_POST['twelth'];

$query = "INSERT INTO candidates VALUES ('$names','$email','$phone', '$course1', '$course2','$tenth','$twelth')";

if (mysqli_query($connection, $query)) 
{
   
    echo '<script>alert("Successfully registered!")</script>';
    
} 
else 
{
    echo "Insertion Failed" . mysqli_error($connection);
}
mysqli_close($connection);
?>
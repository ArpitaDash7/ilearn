<?php
$names= $_POST['names'];
$email=$_POST['email'];
$flights=$_POST['Flight'];
$sources=$_POST['source'];
$destinations=$_POST['destination'];

echo $names;
echo $email;
echo $flights;
echo $sources;
echo $destinations;

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname="flight db";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
$query = "INSERT INTO flightbooking VALUES ('$names','$email','$flights', '$sources', '$destinations')";

if (mysqli_query($connection, $query)) 
{
    echo "Insertion succesful!";
} 
else 
{
    echo "Insertion Failed" . mysqli_error($connection);
}
mysqli_close($connection);
?>
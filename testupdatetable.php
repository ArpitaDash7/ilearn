<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname="admission";
// Create connection
$conn = mysqli_connect($host, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE candidates SET course2='BSC CMS' WHERE names='Anuradha Dash'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
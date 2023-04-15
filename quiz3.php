<html>
<head>
<title>PHP FUN QUIZ</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<style>


    h3
    {
        color:black;
    }

    input[type="submit"] {
  background-color:#45a049 ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;


}

input[type="submit"]:hover {
  background-color: #000000;
}

    </style>
</head>
<body>
<?php
	$host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="e-learning";
    
    $connection = mysqli_connect($host, $username, $password,$dbname);
    if (!$connection) 
    {
        die("Connection Unsucessful: " . mysqli_connect_error());
    }


?>
<div class="container">
    <div class="mcq" style="background-color:black; color: white">
<br />
<br />
<center><b><h1> FUN MULTIPLE CHOICE QUESTIONS</h1></b>
<p>Please fill the details and answers  all questions-</p></center>
<br />
</div>
<div class="form-group">
<form action="score2.php" method="post">

<?php
$sql = "SELECT * FROM quizone";
$result = mysqli_query($connection, $sql);

// Display the questions and answer options
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>".$row['question']."</h3>";
    echo "<input type='radio' name='q".$row['id']."' value='".$row['option_a']."'>".$row['option_a']."<br>";
    echo "<input type='radio' name='q".$row['id']."' value='".$row['option_b']."'>".$row['option_b']."<br>";

}

?>
<br />
<center><input type="submit"  name="submit" value="Submit to view your score"/></center>
</form>
</div>
</div>
</body>
</html>


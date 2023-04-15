<html>
    <head>
        <style>
            body
        {
            background-color: pink;
        
        }
  
            </style>

</head>
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

$score = 0;
foreach ($_POST as $key => $value)
 {
    $q_id = substr($key, 1);
    $answer = mysqli_real_escape_string($connection, $value);
    $sql = "SELECT * FROM quizone WHERE id='$q_id' AND answer='$answer'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        $score++;
    }

}
// Display the score
echo "<br /><br /><center><h1>Dear user, <br/>Your score is $score </h1></center>";

$score = $score	/ 4 *100;
if($score < 50)
{
	echo '<center><h2>You need to score at least 50% to pass the exam.<span>&#128533</span></h2></center>';
}
else {
	echo '<center><h2>You have passed the exam and scored '.$score.'%. <span>&#128512</span></h2></center>';
    
}


?>
</html>
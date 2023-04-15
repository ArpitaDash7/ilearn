<?php
// Connect to the MySQL database
$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}

// Retrieve the questions and answer options from the database
$sql = "SELECT * FROM quiz";
$result = mysqli_query($connection, $sql);

// Display the questions and answer options
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>".$row['question']."</h3>";
    echo "<input type='radio' name='q".$row['id']."' value='a'>".$row['option_a']."<br>";
    echo "<input type='radio' name='q".$row['id']."' value='b'>".$row['option_b']."<br>";
}

// Validate the user's answers and calculate the score
$score = 0;
foreach ($_POST as $key => $value) {
    $q_id = substr($key, 1);
    $answer = mysqli_real_escape_string($connection, $value);
    $sql = "SELECT * FROM quiz WHERE id='$q_id' AND answer='$answer'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        $score++;
    }
}

// Display the score
echo "Your score is: ".$score;
?>
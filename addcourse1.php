<?php
// $names= $_POST['name'];
$host = "localhost";
$username = "root";
$password = "";
$dbname="e-learning";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}


$name=$_REQUEST['course_name'];
$desc=$_REQUEST['description'];
$dur=$_REQUEST['duration'];
$price1=$_REQUEST['price1'];
$price2=$_REQUEST['price2'];


    $fileName = $_FILES['image1']['name'];
    $tempName = $_FILES['image1']['tmp_name'];
    
        if(!empty($fileName))
        {
            $location = "image_store/".$fileName;
            if(move_uploaded_file($tempName, $location))
            {
               
            }
        }
        $query = "INSERT INTO addcourse (course_name, course_description, course_duration, original_price, selling_price, imagex)	
        VALUES('$name','$desc','$dur','$price1','$price2','$location')";
    if (mysqli_query($connection, $query)) 
    {
        header("Location: teacher.html");
    }   
    
    else
    {
       // echo '<script>alert("Please enter your registered email-id")</script>';
        header("Location: addcourse.php");
    }


/*if(isset($_REQUEST['submitbtn']))
{
    if($_REQUEST['name']=="") || ($_REQUEST['description']=="")|| ($_REQUEST['duration']=="")|| ($_REQUEST['price1']=="")|| ($_REQUEST['price2']=="")
    {
        $msg='<div class="course">Fill all fields</div>';
    }
}*/
?>

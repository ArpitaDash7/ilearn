<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname="e-learning";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());

}
if($_SERVER['REQUEST_METHOD']=='POST')
{

  // if snoEdit is set then this will execute to update

  if(isset($_POST['sno']))
  {
    $snoEdit=$_POST['sno'];

    $sql="UPDATE `addcourse` SET `add1` = '0' WHERE `addcourse`.`course_id` = '$snoEdit';"; 
    $result=mysqli_query($connection,$sql);
  }
}
?>
<!DOCTYPE html>

</html>
<title>COURSES</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       



     section {
            background: #3498db;
            margin: 0;
            padding: 0;
        }

        nav.container {
            font-family: 'Roboto', sans-serif;
            width: 100%;
            height: 80px;
            background: #000000;
            border-bottom: 1px solid #3d3f50;
            position: absolute;
            left: 0;
            border-radius: 20px;

            padding-bottom: 20px;

        }



        nav ul {
            width: 65%;
            height: 100%;
            margin: 0 auto;
            list-style: none;
            transition: all 0.5s ease;
        }

        nav ul li {
            width: 20%;
            float: left;
            text-align: center;
            padding: 45px 15px;
            cursor: pointer;
            color: #eee;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.5s ease;

            position: relative;
        }

        nav ul li:hover {
            color: #69e4ff;
            box-shadow: inset 0 5px #ffffff;
        }

        /* sub-menu */
        * {
            margin: 0;
            padding: 0;
        }

        nav ul li ul.sub-nav {
            position: static;
            top: 75px;
            right: 0;
            left: 0;
            width: 50%;
            height: 100px;
            background: #FFFFFF;
            border-top: 1px solid #3d3f50;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.14), -1px 0px 1px rgba(0, 0, 0, 0.14);
            visibility: hidden;
            opacity: 0;
        }

        nav ul li ul.sub-nav li {
            color: #811264;
            font-size: 14px;
            width: 100%;
            padding: 15px 0;
        }

        nav ul li ul.sub-nav li:hover {
            background-color: black;
            color: white;
            box-shadow: 0 0;
        }

        nav ul li:hover ul.sub-nav {
            visibility: visible;
            opacity: 1;
        }


        figure.snip1171 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin:60px;
            min-width: 310px;
            max-width: 450px;
            width: 100%;
            background: #000000;
            color: #333;
            text-align: left;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            top: 100px;

        }

        .snip1171 {
            float: left;

        }

        figure.snip1171 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
            transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        }

        figure.snip1171 img {
            max-width: 100%;
            vertical-align: middle;
            padding-left: 80px;
            padding-top: 10px;
        }

        figure.snip1171 figcaption {
            position: relative;
            background-color: #ffffff;
            padding: 20px 25px 50px;
        }

        figure.snip1171 h3 {
            position: absolute;
            bottom: 100%;
            text-transform: uppercase;
            padding: 0px 25px;
            line-height: 44px;
            margin: 0;
            left: 0;
            font-weight: 400;
            background-color: #000000;
            color: #ffffff;
        }

        figure.snip1171 h3:before {
            position: absolute;
            left: 100%;
            border-style: solid;
            border-width: 44px 0 0 12px;
            border-color: transparent transparent transparent #000000;
            content: '';
            top: 0;
        }

        figure.snip1171 p {
            font-size: 0.8em;
            font-weight: 500;
            text-align: left;
            margin: 0;
            line-height: 1.6em;
        }

        figure.snip1171 .price {
            position: absolute;
            top: 0;
            right: 0;
            color: #ffffff;
            background-color: #000000;
            padding: 0 10px;
            line-height: 40px;
            font-weight: 800;
        }

        figure.snip1171.blue .price:before {
            border-color: transparent #2472a4 transparent;
        }

        figure.snip1171:hover img,
        figure.snip1171.hover img {

            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        figure.snip1171 button.add {
            text-decoration: none;
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #000000;
            line-height: 40px;
            padding: 0 10px;
            color: #ffffff;
            font-weight: 800;
            font-size: 0.9em;
            text-transform: uppercase;
        }
    </style>
</head>


<body style="background-color:rgb(239, 236, 229);">
    <br />
    <b>
        <h1 style="color:rgb(0, 0, 0); font-family: sans-serif; font-size: 25px;">i-Learn | COURSES
        </h1>
    </b>
    <br />
    <section>
        <nav class="container">
            <ul>
                <a href="courses.php">
                    <li>Back to courses</li>
                </a>
                <a href="E:\web dev\loginteacher.html">
                    <li>My Courses</li>
                </a>
                <li>Login
                    <ul class="sub-nav">
                        <a href="E:\web dev\loginteacher.html">
                            <li>As Teacher
                            </li>
                        </a>
                        <a href="E:\web dev\loginhar.html">
                            <li>As Student</li>
                        </a>
                    </ul>
                </li>

                <a href="sign-up.html">
                    <li>Sign up</li>
                </a>

                </li>
            </ul>
        </nav>

    </section>

    <br />
    <br />
   
    
   
        <?php
        $sql= "SELECT * FROM addcourse where add1= '1'";
        $result= $connection->query($sql);
        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
                $course_id= $row['course_id'];
                echo ' <figure class="snip1171"> <a href="E:\web dev\java.html"><img src="java-training.jpg" alt="sample71" /></a>
                <div class="price"><span>	₹</span>' .$row['selling_price']. '</div>
                <figcaption>
                    <h3>' .$row['course_name']. '</h3>
                    <p>
                    ' .$row['course_description']. '
                    </p>
                    <button class="add" id="'.$row['course_id'].' ">Remove from Wishlist</button>
                   
                </figcaption> </figure>';
            }
        }
        ?> 
        
 <form action="addcart.php" method="post" id="wishlist">
       <input type="hidden" name="sno" id="sno">
      </form>    
    <script>
      edits=document.getElementsByClassName('add');
      Array.from(edits).forEach((element)=>{
          element.addEventListener("click",(e)=>{
        //   tr=e.target.parentNode.parentNode;
        //   name=tr.getElementsByTagName('td')[1].innerText;
        //   username=tr.getElementsByTagName('td')[2].innerText;
        //   console.log(name,username);
        //   nameEdit.value=name;  
        //   usernameEdit.value=username;
            sno.value=e.target.id;
            console.log(e.target.id);
            document.getElementById('wishlist').submit();
        })
      })
    </script>      
    
    

</body>
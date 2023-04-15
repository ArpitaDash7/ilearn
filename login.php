<html>

<head>
  <title>Login Page</title>
  <center><img
        src="images/i-Learn transparent bg.png" width=150px
        height=150px></a></center>
  <link rel="stylesheet" href="login.css">
  <!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="245437523031-ki379q7jamar84uur2sq8h7rap72cmqr.apps.googleusercontent.com"> -->

</head>

<body style="background-image: linear-gradient(#fffcf7,rgb(12, 14, 18));">
  <div class="g-signin2" data-onsuccess="onSignIn"></div>

  <script>
    function validateform(){
      var x = document.forms["myform"]["password"].value;
      var y = document.forms["myform"]["username"].value;
      if(y == "")
      {
        username.setCustomValidity("Please enter your Email-id")
        return false;
      }
      else if(x == "")
      {
        password.setCustomValidity("Please fill your password")
        return false;
      }
    }
  </script>

  <br>
  <div class="form-container">
    <form name="myform" onsubmit="return validateform()" method="post">
      <label for="username">E-mail id </label>
      <input type="email" id="username" name="username" placeholder="Email Address" >
      <br>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Password">
      <br>
      <a href="#">
        <p class="lef">Forgot password?</p>
      </a>
   
      <p  style="float:right;
      color: white;"><input type="checkbox">Remember me</p>
      <br>
      <br>
      <br>
      <input type="submit" value="Login">
      <div class="error" id="error-message">Invalid username or password.</div>
    </form>
    <div class="top-right">
      <button title="close" onclick="history.back()" class="btn">

        <svg width="50" height="50" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M8.71146 8.71146C8.79855 8.62415 8.902 8.55489 9.0159 8.50762C9.12979 8.46036 9.2519 8.43604 9.37521 8.43604C9.49852 8.43604 9.62063 8.46036 9.73452 8.50762C9.84842 8.55489 9.95188 8.62415 10.039 8.71146L15.0002 13.6746L19.9615 8.71146C20.0486 8.6243 20.1521 8.55515 20.266 8.50798C20.3799 8.46081 20.5019 8.43653 20.6252 8.43653C20.7485 8.43653 20.8705 8.46081 20.9844 8.50798C21.0983 8.55515 21.2018 8.6243 21.289 8.71146C21.3761 8.79863 21.4453 8.9021 21.4924 9.01599C21.5396 9.12988 21.5639 9.25194 21.5639 9.37521C21.5639 9.49848 21.5396 9.62054 21.4924 9.73443C21.4453 9.84832 21.3761 9.9518 21.289 10.039L16.3258 15.0002L21.289 19.9615C21.3761 20.0486 21.4453 20.1521 21.4924 20.266C21.5396 20.3799 21.5639 20.5019 21.5639 20.6252C21.5639 20.7485 21.5396 20.8705 21.4924 20.9844C21.4453 21.0983 21.3761 21.2018 21.289 21.289C21.2018 21.3761 21.0983 21.4453 20.9844 21.4924C20.8705 21.5396 20.7485 21.5639 20.6252 21.5639C20.5019 21.5639 20.3799 21.5396 20.266 21.4924C20.1521 21.4453 20.0486 21.3761 19.9615 21.289L15.0002 16.3258L10.039 21.289C9.9518 21.3761 9.84832 21.4453 9.73443 21.4924C9.62054 21.5396 9.49848 21.5639 9.37521 21.5639C9.25194 21.5639 9.12988 21.5396 9.01599 21.4924C8.9021 21.4453 8.79863 21.3761 8.71146 21.289C8.6243 21.2018 8.55515 21.0983 8.50798 20.9844C8.46081 20.8705 8.43653 20.7485 8.43653 20.6252C8.43653 20.5019 8.46081 20.3799 8.50798 20.266C8.55515 20.1521 8.6243 20.0486 8.71146 19.9615L13.6746 15.0002L8.71146 10.039C8.62415 9.95188 8.55489 9.84842 8.50762 9.73452C8.46036 9.62063 8.43604 9.49852 8.43604 9.37521C8.43604 9.2519 8.46036 9.12979 8.50762 9.0159C8.55489 8.902 8.62415 8.79855 8.71146 8.71146Z">
          </path>
        </svg>
      </button>
    </div>
  </div>
</body>

</html>
<?php
require("db.php");
session_start();
$email=$_POST['username'];
$passwords=$_POST['password'];

$query = "SELECT * FROM registerstu where email='$email' and pass='". md5($passwords) ."'";

    if (!mysqli_query($connection, $query)) 

    {
        echo "Select Query" . mysqli_error($connection);
    }

$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$data = array('name' => $row['nam'],
                'profile' => $row['profile_pic']); // fetching username from DB nam is col name 
if($email != "" && $passwords != "")
{
  if ($rows == 1) {
    $_SESSION['username'] = $data;
    // Redirect to user dashboard page
    // echo '<script>alert("Welcome to ilearn '.$_SESSION['username']['name'].' ")</script>';
    header("Location: homepage.php");
} 
else {
  echo '<script>alert("Invalid username/password")</script>';
}
}
?>

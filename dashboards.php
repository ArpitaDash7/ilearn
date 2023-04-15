<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- Font Awesome Cdn Link -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <style>
    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: rgb(239, 236, 229);
      ;
    }

    nav {
      position: sticky;
      top: 0;
      bottom: 0;
      height: 100vh;
      left: 0;
      width: 90px;
      /* width: 280px; */
      background: rgb(3, 3, 3);
      ;
      overflow: hidden;
      transition: 1s;
    }

    nav:hover {
      width: 250px;
      transition: 1s;
    }

    .logo {
      text-align: center;
      display: flex;
      margin: 10px 0 0 10px;
      padding-bottom: 3rem;
    }

    .logo img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
    }

    .logo span {
      font-weight: bold;
      padding-left: 15px;
      font-size: 18px;
      text-transform: uppercase;
    }

    a {
      position: relative;
      width: 280px;
      font-size: 14px;
      color: rgb(85, 83, 83);
      display: table;
      padding: 10px;
    }

    nav .fas {
      position: relative;
      width: 70px;
      height: 40px;
      top: 20px;
      font-size: 20px;
      text-align: center;
    }

    .nav-item {
      position: relative;
      top: 12px;
      margin-left: 10px;
    }

    .user {
      position: relative;
      top: 12px;
      margin-left: 55px;
    }

    a:hover {
      background: #eee;
      color: #020202;
    }

    a {
      color: #eee;
    }

    a:hover #aa {
      color: #34AF6D;
      transition: 0.5s;
    }

    .logout {
      position: absolute;
      bottom: 0;
    }

    body {
      background-color: #efefef;
    }

    .profile-pic {
      width: 45px;
      max-height: 45px;
      display: inline-block;
    }

    .file-upload {
      display: none;
    }

    .circle {
      border-radius: 100% !important;
      overflow: hidden;
      width: 45px;
      height: 45px;
      border: 2px solid rgba(25, 25, 25, 0.2);
      position: absolute;
      top: 12px;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .p-image {
      position: absolute;
      top: 40px;
      left: 45px;
      color: #666666;
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .p-image:hover {
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .upload-button {
      font-size: 0.8em;
    }

    .upload-button:hover {
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
      color: black;
    }
  
  </style>
  <div class="container">
    <nav>
      <ul>
        <li><a class="logo">
            <div class="row">
              <div class="small-12 medium-2 large-2 columns">
                <div class="circle">
                  <img class="profile-pic"
                    src="<?php echo $_SESSION['username']['profile'];?>">
                </div>
                <div class="p-image">
                  <!-- <label for="fileInput"> -->
                  <i class="fa fa-camera upload-button"></i>
                <!-- </label> -->
                  <input class="file-upload" id="fileInput" type="file" accept="image/*" name= "image1">
                </div>
              </div>
            </div>
            <span class="user">
              <?php echo $_SESSION['username']['name']; ?>
            </span>
          </a></li>
        <li><a href="dashboard.php">
            <i class="fas fa-menorah" id="aa"></i>
            <span class="nav-item">Dashboard</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-comment" id="aa"></i>
            <span class="nav-item">Message</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-database" id="aa"></i>
            <span class="nav-item">Report</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-chart-bar" id="aa"></i>
            <span class="nav-item">Attendance</span>
          </a></li>
        <li><a href="settings.html">
            <i class="fas fa-cog" id="aa"></i>
            <span class="nav-item">Setting</span>
          </a></li>

        <li><a href="logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a></li>
      </ul>
    </nav>
  </div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>
</body>

</html>
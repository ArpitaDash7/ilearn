<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>

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

    a:hover {
      background: #eee;
      color: #020202;
    }

    a {
      color: #eee;
    }

    a:hover i {
      color: #34AF6D;
      transition: 0.5s;
    }

    .logout {
      position: absolute;
      bottom: 0;
    }
  </style>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
            <img src="user.png">
            <span class="nav-item">
                <?php
                // if(isset($_COOKIE['unique_id']))
                // {
                //     $unique_id= $_COOKIE['unique_id'];
                //     $query= "SELECT email FROM user_sessions WHERE unique_id= '$unique_id'";
                //     $fetch = mysqli_fetch_array($query);
                //     $row = mysqli_num_rows($query);
                //     if ($row > 0)
                //     {
                //         echo $fetch;
                //     }
                // }
                echo "Arpita";
              ?>
            </span>
          </a></li>
        <li><a href="dashboard.html">
            <i class="fas fa-menorah"></i>
            <span class="nav-item">Dashboard</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-comment"></i>
            <span class="nav-item">Message</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-database"></i>
            <span class="nav-item">Report</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Attendance</span>
          </a></li>
        <li><a href="settings.html">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a></li>

        <li><a onclick="history.back()" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a></li>
      </ul>
    </nav>
  </div>

</body>

</html>
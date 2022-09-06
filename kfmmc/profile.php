<!DOCTYPE html>
<?php
include_once "con_DB.php";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="KFMMC_LogoEn2.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>

  <style>
    * {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: rgb(20, 84, 33);
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

    
    /* The side navigation menu */
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    /* Sidebar links  التنسيق الجانبي*/
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    /* Links on mouse-over  التحد*/ 
    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    .personal_info {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
      text-align: left;
      float: none;
      width: 40%;
      padding: 0.75em;
    }
    .logout {

      margin-left: 0%;
      padding: 1px 16px;
    }
  </style>
</head>

<body>
  <!-- code -->
  <img src="KFMMC_LogoEn.png" width="295">
 <!-- header -->
    
<div class="navbar">
    <a href="Home_page_user.php">Home page</a>
    <a href="Courses_User.php">Courses</a>
    <a href="calendar.html">Calendar</a>
    <a href="profile.php" class="right">profile</a>
  </div>

  <!-- The sidebar -->
  <div class="sidebar">
    <a class="active">Contect</a><hr>
    <a 78href="profile_personal_info.php">Personal inforamtion</a>
    <a href="order_status.php">Order status</a>
    
    <hr>
    <div class="logout">
    <form action="Home_page.php" method="get">
        <button type='submit' name='logout' class="logot"> Logout</button></form>
        <?php
if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header('Location: Home_page.php');

}

?>
</div>
  </div>

  <!-- Page content -->
  

  </div>
  <!-- Page content -->
  <form idid="profile"  method="GET">
  <div class="personal_info">
    <h3>Personal inforamtion</h3>
    <br><br>
    <?php
    $req = " SELECT NAME,EMPNUM , DEPARTMENT FROM list " ;
$query = mysqli_query($conn , $req);

while($fetch = mysqli_fetch_object($query))
{
  echo"Full Name : ".$fetch->NAME."<br><br>";
  echo"Employee number : ".$fetch->EMPNUM."<br><br>";
  echo"Department : ".$fetch->DEPARTMENT."<br><br><br>";
  
}
?>
    <br><br>
  </div>
</form>

<div>
<nav class="navbar">
    <ul>
      <li>
        <a href="#" id="notifications">
          <label for="check">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
            <span class="count"></span>
          </label>
        </a>
        <input type="checkbox" class="dropdown-check" id="check" />
        <ul class="dropdown">
        </ul>
      </li>
    </ul>
  </nav>
</div>

</body>
</html>
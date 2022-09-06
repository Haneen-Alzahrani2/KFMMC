<?php 
session_start();
include_once "con_DB.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="KFMMC_LogoEn2.png">
  <title>Courses </title>
   <link rel="stylesheet" href="courses_css.css">

 

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
    .header h2 {
      font-size: 30px;
    }

    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
      background-color:  rgb(20,84,33);
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
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
    }
    .logo-image{
  padding-right: 70%;
  padding-top: 10px;
  padding-bottom: 10px;
}

.logout {
  padding-left: 94%;
  padding-top: 1%;
}
</style>
</head>
<body>
   <!-- images -->
  <div class="logo-image">
  <img src="KFMMC_LogoEn.png" width="370" height="100" >
  </div>
<!-- header -->
<div class="navbar">
    <a href="Home_page.php">Home</a>
    <a href="Courses_2.php">Courses</a>
    <a href="index.php">Attendess</a>
    <a href="calendar.html">Calendar</a>
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
 
<br><br>
        <h3>IT COURSES </h3><br>
      <div class="Courses">
<!-- الصفحة الخاصة للمدرب -->
      <form action="insert_course.php " method="post">
        <!-- ظهور بيانات المدرب -->
        <h4>Your information data  </h4>
        <br><br>
        Full Name : 
          <br><input type="text" name="full_name" >
          <br /><br />
        Employee number if KFMMC :
          <br><input type="text" name="emp_number">
          <br /><br />
        Department : 
          <br><input type="text" name="dep" >
          <br /><br />
        <br><hr>


        <!-- معلومات التدريب -->
        <h4 >Course data  </h4>
        <br><br>
        Course Name <span id="usermsg">*</span> : 
         <br>
      <select  name="course_name">
        <option value="">Please choose ..</option>
        <option value="ELECTRONIC INCIDENT REPORTING SYSTEM (IRS)">ELECTRONIC INCIDENT REPORTING SYSTEM (IRS) </option>
        <option value="MICROSOFT APPLICATION TRAINING">MICROSOFT APPLICATION TRAINING </option>
        <option value="IT WORKSHOP ">IT WORKSHOP </option>
        <option value="IT AND HIS SECURITY ">IT AND HIS SECURITY </option>
        <option value="ITSR REQUEST ">ITSR REQUEST </option>
        <option value="HR PORTAL ">HR PORTAL</option>
        <option value="ELECTRONIC FORMS ">ELECTRONIC FORMS </option>
        <option value="HIS SYSTEM ">HIS SYSTEM </option>
        <option value="SYSTEM DOWN TIME">SYSTEM DOWN TIME </option>
        <option value="NEW HIRED ORIENTATION">NEW HIRED ORIENTATION </option>
      </select>

      <br><br>

        Date <span id="usermsg">*</span> : 
        <br><input type="date" name="coures_date" > 
        <br><br>
        Start Time <span id="usermsg">*</span> :
         <br><input type="time" name="start_time"  > 
         <br><br>
        End Time <span id="usermsg">*</span> : 
        <br><input type="time" name="end_time"  > 
        <br><br>

        meeting location <span id="usermsg">*</span> :
        <br> 
        <select name="meeting_Loc">
        <option value="">Please choose ..</option>
        <option value="Zoom online">Zoom online </option>
        <option value="ICTD training room">ICTD training room</option></select>
        <br><br>

        Target audience <span id="usermsg">*</span> :
        <br><br>
        <select name="target_audience" >
        <option value="">Please choose ..</option>
        <option value="All">All</option>
        <option value="medical">Medical</option>
        <option value="non-medical">Non Medical</option>
        </select>
        <br><br>

         Sets <span id="usermsg">*</span> :
        <br> <input type="text" name="coures_sets" >
        <br /><br />

        Activity Hours <span id="usermsg">*</span> :
        <br> <input type="text" name="activ_hours" >
        <br /><br />

        <div class="forms-row col-3">

      <input class=" button" type="submit" name="submit" value="submit" >
      </div>
      </form>
        <br><br><br><br><br><br>
          </div>
<br><br><br>
</body>
</html>
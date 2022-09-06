<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="KFMMC_LogoEn2.png">
  <link rel="stylesheet" href="courses_css.css">
  <title>IT courses Registration Form </title>
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
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
    }

    .logo-image {
      padding-right: 50%;
      padding-top: 10px;
      padding-bottom: 10px;

    }
  </style>
</head>

<body>
    <!-- code -->
    <!-- شعار الأيقونة -->
    <div class="logo-image">
      <img src="KFMMC_LogoEn.png" width="295">
    </div>
  
    <!-- header -->
    <div class="navbar">
      <a href="Home_page.php">Home </a>
      <a href="Courses_User.php">Courses</a>
      <a href="calendar.html">Calendar</a>
      <a href="profile.php" class="right">profile</a>
    </div>


    <div class="reg_top">
      <br /><br />
      <h1>IT courses Registration Form</h1> <br />
    </div>

    <!-- أحضار المعلومات المسجلة -->
    
    <form action="insert.php" method="post">
      <div class="reg_form">
        Full Name <span id="usermsg">*</span> :
        <br><input type="text" name="full_name">
        <br /><br />
        Saudi council license number <span id="usermsg">*</span> :
        <br><input type="text" name="scln">
        <br /><br />
        Employee number if KFMMC <span id="usermsg">*</span> :
        <br><input type="text" name="employee_number">
        <br /><br />
        Department / unit if KFMMC <span id="usermsg">*</span> :
        <br> <input type="text" name="department">
        <br><br>


        Specialty <span id="usermsg">*</span> :<br><br>
        <select class="form-control" name="specialty">
          <option value="">Please choose ..</option>
          <option value="PHYSICIAN ">PHYSICIAN </option>
          <option value="RN ">RN </option>
          <option value="PARAMEDICAL ">PARAMEDICAL </option>
          <option value="OTHERS ">OTHERS </option>
        </select>
        <br><br><br>
        <hr>


        <label>Contact information</label> 
        <br><br>
        Ext Telephone <span id="usermsg">*</span> :
        <br><input type="text" name="tele_ext" >
        <br /><br />
        Fax<span id="usermsg">*</span> :
        <br><input type="text" name="fax" >
        <br /><br />

        <h5> ( Note : Department Head signature is a validation that you have approved the Employee to attend the course
          and the department staffing should be planned accordingly. )
        </h5>
        <input class=" button" type="submit" name="submit" value="Submit">

        <br><br><br><br>
    </form>
    </div>

    <br><br><br><br><br>

</body>
</html>
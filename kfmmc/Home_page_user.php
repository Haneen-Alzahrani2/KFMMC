<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Home page </title>
  <link rel="icon" href="KFMMC_LogoEn2.png">
  <link rel="stylesheet" href="style_Home_page.css">
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
      /* padding: 5px; */
      text-align: center;
      background: white;
      color: rgb(20, 84, 33);
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
      color: rgb(20, 84, 33);
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

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #ccc;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>

</head>

<body>


  <!-- code -->
  <img src="KFMMC_LogoEn.png" width="295">



  <div class="navbar">
    <a href="Home_page_user.php">Home page</a>
    <a href="Courses_User.php">Courses</a>
    <a href="calendar.html">Calendar</a>
    <a href="profile.php" class="right">profile</a>
  </div>


    <div class="side">
    <div class="main">
      <div class="header">
      <h1>Department of Communications and IT</h1>
      <br><br>
      </div>

      <h2>Courses </h2>
      <div class="card">
        <h3>ELECTRONIC FORMS</h3>
        <p>Some text</p>
        <p>ICTD training room</p>
        <br>
        <button class="btn"><a href="registration_form.php"> Register </a></button>
      </div>
      <br><br>
      <div class="card">
        <h3>ELECTRONIC INCIDENT REPORTING SYSTEM (IRS)</h3>
        <p>Some text</p>
        <p>ICTD training room</p>
        <br>
        <button class="btn"><a href="registration_form.php"> Register </a></button>
      </div>
      <br><br>
      <div class="card">
        <h3>MICROSOFT APPLICATION TRAINING</h3>
        <p>Some text</p>
        <p>ICTD training room</p>
        <br>
        <button class="btn"><a href="registration_form.php"> Register </a></button>
      </div>

    </div>
  </div>

  <br><br><br><br><br>
  <div class="footer">
    <br><br><br><br><br>
  </div>


  <!-- login -->

  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>

      <div class="container">
        <label for="uname"><b>ID</b></label>
        <input type="text" placeholder="Enter Username" name="id" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password ?</a></span>
      </div>
    </form>
  </div>
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  
</body>

</html>
<!DOCTYPE html>
<html>
<!-- الصفحة الي تظهر فيها كل الدورات التدريبية و من خلالها بقدر أنشي دورة جديدة -->

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="KFMMC_LogoEn2.png">
  <title>Courses page </title>


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

    /* تناسق البورد */
    body {
      background: #ffffff;
      font-family: Quicksand, sans-serif;
      text-align: center;
    }

    .card {
      width: 250px;
      height: 240px;
      border-radius: 5px;
      overflow: hidden;
      background: #fff;
      box-shadow: 3px 3px 18px -8px #263238;
      color: #424242;
      margin: 20px auto;
      padding: 20px;
      display: inline-block;
    }

    /* تنسيق الزر الاخضر */
    .modal-open {
      display: inline-block;
      border-radius: 10px;
      background: rgb(20, 84, 33);
      padding: 5px 15px;
      color: #fff;
    }

    /* .modal-label {
      position: relative;
    } */

    /* النقر */
    .modal-radio {
      position: absolute;
      visibility: hidden;
      opacity: 0;
    }

    .modal {
      position: fixed;
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      opacity: 0;
      transform: scale(0);
      transition: opacity .25s, transform .25s;
      z-index: 99;
    }

    .modal2 {
      transform: scale(0.8) translate(0, -100%);
      transition: transform .35s, opacity .35s;
    }

    .modal3 {
      transform: translate(0, 100%) scale(.9);
    }

    .modal4 {
      transform: scale(0) rotate(180deg);
    }

    #modal-open:checked+.modal {
      opacity: 1;
      transform: scale(1);
    }

    #modal-open2:checked+.modal2 {
      transform: scale(1) translate(0, 0);
      opacity: 1;
    }

    #modal-open3:checked+.modal3 {
      transform: scale(1) translate(0, 0);
      opacity: 1;
    }

    #modal-open4:checked+.modal4 {
      transform: scale(1) rotate(0deg);
      opacity: 1;
    }

    /* تاثير الشفافيه */
    .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      top: 0;
      left: 0;
    }

    /* الصفحة الي تطلع بعد الزر - البوب اب */
    .modal .content {
      position: absolute;
      width: 70%;
      height: 300px;
      max-height: 70%;
      top: 10%;
      left: 15%;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 3px 15px -2px #222;
      padding: 20px;
    }

    /* دائرة الإغلاق */
    .close-btn {
      position: absolute;
      width: 30px;
      height: 30px;
      top: 10px;
      right: 20px;
      border-radius: 50%;
      border: 2px solid #f44336;
      cursor: pointer;
    }

    .close-btn:after,
    .close-btn:before {
      content: "";
      position: absolute;
      width: 70%;
      height: 2px;
      background: #f44336;
      left: 15%;
      top: 50%;
      top: calc(50% - 1px);
      transform-origin: 50% 50%;
      transform: rotate(45deg);
    }

    .close-btn:before {
      transform: rotate(-45deg);
    }

    h2 {
      font-size: 16px;
    }

    .logo-image {
      padding-right: 70%;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .logout {
  padding-left: 94%;
  padding-top: 1%;
}
.btn-courses{
  padding-right:2%;
  padding-top:2%;
}
  </style>

</head>

<body>
  <!-- images -->
  <div class="logo-image">
    <img src="KFMMC_LogoEn.png" width="370" height="100">
  </div>
  <!-- header -->
  <div class="navbar">
    <a href="Home_page_admin.php">Home </a>
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
  <div class="btn-courses">
  <input class="button" type="submit" name="ordering" value="+ Add New Course" onclick="window.location.href = 'Courses.php';">
  </div>
  <div class="btn-row">

  </div>
  <br><br><br><br>
  <hr><br>
  <!-- code -->
  <!-- card 1 -->
  <div class="card">
    <div class="content">
      <h2>ELECTRONIC INCIDENT REPORTING SYSTEM (IRS)</h2>
      <br><br>
      <label class="modal-open modal-label" for="modal-open">
        <p>Open</p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open" class="modal-radio" />
      <div class="modal">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <input class=" button" type="submit" name="ordering" value="next " onclick="window.location.href = 'registration_form.php';">
        </div>
      </div>
    </div>
  </div>

  <!-- card 2 -->

  <div class="card">
    <div class="content">
      <h2>Mcrosoft Excel </h2>
      <br><br>
      <label class="modal-open modal-label" for="modal-open2">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open2" class="modal-radio" />
      <div class="modal modal2">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>
          <input class=" button" type="submit" name="ordering" value="next" onclick="window.location.href = 'registration_form.php';">
        </div>
      </div>
    </div>
  </div>

  <!-- card 3 -->
  <div class="card">
    <div class="content">
      <h2>IT WORKSHOP</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open3">
        <p>Open</p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open3" class="modal-radio" />
      <div class="modal modal3">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>.. </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>
          <input class=" button" type="submit" name="ordering" value="next" onclick="window.location.href = 'registration_form.php';">
        </div>
      </div>
    </div>
  </div>

  <!-- card 4 -->
  <div class="card">
    <div class="content">
      <h2>IT AND HIS SECURITY</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>

          <input class=" button" type="submit" name="ordering" value="next " onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 5 -->
  <div class="card">
    <div class="content">
      <h2>ITSR REQUEST</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>

          <input class=" button" type="submit" name="ordering" value="تقديم الطلب" onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 6 -->
  <div class="card">
    <div class="content">
      <h2>HR PORTAL</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <input class=" button" type="submit" name="ordering" value="تقديم الطلب" onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 7 -->
  <div class="card">
    <div class="content">
      <h2>ELECTRONIC FORMS</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>

          <input class=" button" type="submit" name="ordering" value=" next" onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 8 -->
  <div class="card">
    <div class="content">
      <h2>HIS SYSTEM</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

          <input class=" button" type="submit" name="ordering" value="تقديم الطلب" onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 9 -->
  <div class="card">
    <div class="content">
      <h2>SYSTEM DOWN TIME</h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
      <div class="modal modal4">
        <label class="modal-label overlay">
          <input type="radio" name="modal" value="close" class="modal-radio" />
        </label>
        <div class="content">
          <div class="top">
            <h2>Heading </h2>
            <label class="modal-label close-btn">
              <input type="radio" name="modal" value="close" class="modal-radio" />
            </label>
          </div>
          <p>-</p>

          <input class=" button" type="submit" name="ordering" value=" Next" onclick="window.location.href = 'registration_form.php';">
          <input type="radio" name="modal" value="close" class="modal-radio" />
          </label>
        </div>
      </div>
    </div>
  </div>

  <!-- card 9 -->
  <div class="card">
    <div class="content">
      <h2>NEW HIRED ORIENTATION </h2>
      <br><br><br>
      <label class="modal-open modal-label" for="modal-open4">
        <p>Open </p>
      </label>
      <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />

    </div>
  </div>
  </div>
</body>

</html>
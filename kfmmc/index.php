<!doctype html>
<?php	
	include_once('con_DB.php');
  
  ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>  </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main-style.css" rel="stylesheet">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/form-jquery.js" type="text/javascript"></script>	
<script src="js/main-js.js"></script>
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
    <a href="Home_page_admin.php">Home</a>
    <a href="Courses_2.php">Courses</a>
    <a href="index.php">Attendess</a>
    <a href="calendar.html">Calendar</a>
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
<?php
	
	if(isset($_GET['user_edit'])){
				
		$id = $_GET['user_edit'];
					$sql = mysqli_query($conn , " select * from users where id = '$id' ");
					$user= mysqli_fetch_assoc($sql);
		
		echo '
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit User</h5>
        <button type="button" class="close" onclick="goBack()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
		<form class="contact-form "  action="include/edit.php" method="post" id="" enctype="multipart/form-data">
						
						
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">Full Name</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="full_name" value="'.$user['full_name'].'" >
						  <input type="hidden" class="form-control" name="id" value="'.$user['id'].'" >
						</div>
					  </div>
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">scln</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="user_name" value="'.$user['scln'].'" >
						</div>
					  </div>
					  
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">Employee Number</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="email" value="'.$user['employee_number'].'" >
						</div>
					  </div>
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">Department</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="phone" value="'.$user['department'].'" >
						</div>
					  </div>
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">Specialty</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="address" value="'.$user['specialty'].'" >
						</div>
					  </div>
					  
		   <div id="product_ar_edit_result" class="text-center col-md-12" style="margin:10px 0;"></div>
        <button type="button" onclick="goBack()" class="btn btn-danger" data-dismiss="modal" herf:"del.php";>Delete</button>
		 
        <button type="submit" name="menu_ar_edit" class="btn btn-success">Accept</button>
		  </form>

      </div>
    </div>
  </div>
</div>				
		';
	}
	
?>

	
    <br>
	<h1 style="font-size: 25px;text-align: center;margin: 20px;color:black;">Users List</h1><br>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Full Name</th>
		  <th scope="col">SCLN</th>
		  <th scope="col">Employee Number</th>
		  <th scope="col">Department</th>
		  <th scope="col">Specialty</th>
		  <th scope="col">Telephone extension</th>
          <th scope="col">Fax</th>

		</tr>
	  </thead>
	  <tbody>

	  <?php
	

		$sql = mysqli_query($conn ,"select * from users ");
		$num = 1;
		while($user = mysqli_fetch_assoc($sql)){
			echo '
					<tr>
					  <th scope="row">'.$num++.'</th>
					  <td>'.$user['full_name'].'</td>
					  <td>'.$user['scln'].'</td>
					  <td>'.$user['employee_number'].'</td>
					  <td>'.$user['department'].'</td>
					  <td>'.$user['specialty'].'</td>
                      <td>'.$user['tele_ext'].'</td>
                      <td>'.$user['fax'].'</td>
					  <td><a href="?user_edit='.$user['id'].'" class="btn btn-warning">Edit</a></td>
					</tr>
			';
		}	
	?>
	
  </tbody>
</table>
	
	
<script type="text/javascript">
    $(window).on('load',function(){
        $('#edit').modal('show');
    });
</script>
	
	
<script>
function goBack() {
    window.history.back();
}
</script>


<script>
$('#edit').modal({
backdrop: 'static',
keyboard: false
})
</script>

</body>
</html>

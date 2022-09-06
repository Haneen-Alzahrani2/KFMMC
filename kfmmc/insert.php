<?php 
include_once "con_DB.php";

if(isset($_POST['submit']))
{
  $full_name = $_POST['full_name'];
  $scln = $_POST['scln'];
  $employee_number = $_POST['employee_number'];
  $department = $_POST['department'];
  $specialty = $_POST['specialty'];
  $tele_ext = $_POST['tele_ext'];
  $fax = $_POST['fax'];

$sql = "INSERT INTO users (full_Name,scln,employee_number,department,specialty,tele_ext,fax)
VALUES('$full_name','$scln','$employee_number','$department','$specialty','$tele_ext','$fax')";

if (mysqli_query($conn, $sql)) {
  echo "New record has been added successfully !";
} else {
  echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
header('location:Courses_User.php');
mysqli_close($conn);

}


?>
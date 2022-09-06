<?php
include_once "con_DB.php";

if(isset($_POST['submit']))
{
  $full_name = $_POST ['full_name'];
  $emp_number = $_POST ['emp_number'];
  $dep = $_POST ['dep'];
  $course_name = $_POST ['course_name'];
  $coures_date = $_POST ['coures_date'];
  $start_time = $_POST ['start_time'];
  $end_time = $_POST ['end_time'];
  $meeting_Loc = $_POST ['meeting_Loc'];
  $target_audience = $_POST ['target_audience'];
  $coures_sets = $_POST ['coures_sets'];
  $activ_hours = $_POST ['activ_hours'];
  
  $sql = "INSERT INTO courses(full_name,emp_number,dep,course_name,coures_date,
 start_time,end_time,meeting_Loc,target_audience,coures_sets,activ_hours)
VALUES('$full_name','$emp_number','$dep','$course_name','$coures_date','$start_time','$end_time' ,
 '$meeting_Loc' , '$target_audience' ,'$coures_sets' , '$activ_hours')";

if(mysqli_query($conn,$sql)){
  echo "New record has been added successfully !";
  
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
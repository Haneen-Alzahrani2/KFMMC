<?php 
include_once "con_DB.php";
$req = " SELECT course_name FROM courses " ;
$query = mysqli_query($conn , $req);

while($fetch = mysqli_fetch_object($query))
{
    echo"courses name: ".$fetch->course_name."<br>";
}
?>
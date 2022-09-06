<?php
	$servername='localhost';
	$username='root';
	$password='123';
	$dbname = "kfmmc";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysqli_connect_error());
		}
?>
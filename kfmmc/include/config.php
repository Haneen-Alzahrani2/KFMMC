<?php

$host 		= 'localhost' ; // الهوست
$username 	= 'root' ; 		// اسم مستخد الهوست
$password   = '******'; // كلمة مرور 
$db_name    = 'model' ; // اسم قاعدة البيانات

$conn = mysqli_connect( $host , $username , $password , $db_name );
mysqli_set_charset($conn , "utf8");

if (!$conn) {
	echo mysqli_connect_error("خطأ فى الإتصال بقاعدة البيانات") . mysqli_errno();
}

function close_db(){
	global $conn;
	mysqli_close($conn);
}

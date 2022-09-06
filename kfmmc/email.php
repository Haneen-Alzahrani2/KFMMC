<?php
	include_once('con_DB.php');
    
    $to      = 'samaralgh@gmail.com';
    $subject = '"IT department';
    $message = 'Register successfully!';
    $headers = 'From: Haneenalzahrani959@gmail.com'       . "\r\n" .
                 'Reply-To: wHaneenalzahrani959@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>

<?php
include_once "con_DB.php";


if (isset($_POST['login'])) 
{
  $EmpNum=$_POST['EmpNum'];
  $Department=$_POST['DEPARTMENT'];
  $psw=$_POST['psw'];


  $query = mysqli_query($con_DB, "SELECT EMPNUM FROM emp_list WHERE EMPNUM='$EmpNum'
   AND DEPARTMENT='$Department' AND psw='$psw' ");

  $ret = mysqli_fetch_array($query);
  $con_DB = mysqli_num_rows($query);

  if ($ret == 1) {
    $_SESSION['login'] = array(
      'EMPNUM' => $ret['EMPNUM'],
      'DEPARTMENT' => $ret['DEPARTMENT'],
      'Psw' => $ret['psw'],
      'UserType' => $ret['role']
    );


    $role = $_SESSION['EMPNUM']['DEPARTMENT'];
    switch ($role) {
      case 'System User':
        header('location: Home_page.php');
        break;
      case 'Administrator':
        header('location: Home_page_admin.php');
        break;
    }
  } else {
    echo "<script type='text/javascript'>alert('Wrong ID and password combination');
</script>";
  }
}
?>
<?php
include_once('con_DB.php');
// sql to delete a record
$sql = "DELETE FROM users WHERE id=12";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

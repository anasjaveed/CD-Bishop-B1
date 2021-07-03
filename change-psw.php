<?php

include('connects.php');


$mail=$_POST['email'];
$newpass=$_POST['newpass'];


$sql = "UPDATE registration SET Password='$newpass' WHERE Email='$mail'";

if ($conn->query($sql) === TRUE) {
  echo "Password updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

?>
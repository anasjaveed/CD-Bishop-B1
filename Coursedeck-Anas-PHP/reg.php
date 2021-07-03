<?php

	include('konnect.php');

$fname=$_POST['fname']; // $varaible name=['attribute name']
$lname=$_POST['lname'];
$gen=$_POST['gender'];
$mail=$_POST['email'];
$pass=$_POST['psw'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$city=$_POST['city'];

$sql = "INSERT INTO registration VALUES ('','$fname', '$lname', '$gen', '$mail', '$pass', '$dob', '$phone', '$city')";

if (mysqli_query($conn, $sql)){
	echo "registration successfull";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
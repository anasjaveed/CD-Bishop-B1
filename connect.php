<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "dates_dryfruits";
$store_url = "http://localhost:81/php-inventory-management-system-master/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
 <?php
$conn = new mysqli("localhost","root","","starter");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?> 


<!-- mysql_


There are two options 
1. mysqli_
2. PDO  -->
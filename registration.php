	<?php
			include('connect.php');
			
			
			$fname=$_POST['fname'];
			
           	$lname=$_POST['lname'];
			 $email=$_POST['email'];
			 $password=$_POST['password'];

			 $conpassword=$_POST['conpassword'];
			 $dob=$_POST['dob'];
			 $mob=$_POST['mob'];

             $school=$_POST['school'];
                        			
			 
   $sql="insert into register values('$fname','$lname','$email','$password','$conpassword','$dob','$mob','$school')";
//echo "$sql";

			 $res=mysql_query($sql);
{
if($res==1)
{

	?>
	  
 <script>
alert("Registration sucessfull ");
document.location.href="login.html";

</script>
<?php
}
else
{
?>
<script>
alert("Registration unsucessfull");
document.location.href="reg.html";
</script>
<?php

}
}
?>

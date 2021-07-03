<?php
$con=mysql_connect("localhost","root","") or die("connection unsucessful");
		if(!$con)
		{
			die("ERROR:".mysql_error());
		}
		mysql_select_db("mcloud",$con);

?>
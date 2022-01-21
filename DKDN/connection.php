<?php
	$localhost="localhost";
	$name="root";
	$pass="";
	$dbName="banhang";
	$conn=mysqli_connect($localhost,$name,$pass,$dbName);
	if(!$conn)
	{
		die("failed:" . mysqli_connect_error());
	}
	
?>
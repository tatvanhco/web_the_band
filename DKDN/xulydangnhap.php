<?php
	include('connection.php');
	if(isset($_POST['submit1'])&& $_POST['Uid']!=""&& $_POST['psd']!="")
	{
		$user=$_POST['Uid'];
		$password=$_POST['psd'];
		require_once 'functions.php';
		if(emptylogin($user,$password) !== false)
		{
			header("location:../index.php?error=emtyinput");
		}
		loginUser($conn,$user,$password);
	}
	else
	{

		 header("location:../index.php?error=emtyinput");
		 
		 exit();
		

	}
?>

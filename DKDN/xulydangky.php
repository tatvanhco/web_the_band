<?php
	include('connection.php');
	if(isset($_POST['submit']) && $_POST['user']!="" && $_POST['email']!="" && $_POST['password']!="" && $_POST['passwordrp']!="" && $_POST['userID']!="")
	{
		$userID=$_POST['userID'];
		$user=$_POST['user'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$passwordrp=$_POST['passwordrp'];
		require_once 'functions.php';
		if(emptyinput($user,$userID,$email,$password,$passwordrp) !== false)
		{
			header("location:../index.php?error=emptyinput");
			exit();
		}
		if(invalidName($user) !== false)
		{
			header("location:../index.php?error=invalidName");
			exit();
		}
		if(invalidEmail($email) !== false)
		{
			header("location:../index.php?error=invalidEmail");
			exit();
		}
		if(passwordMatch($password,$passwordrp) !== false)
		{
			header("location:../index.php?error=passwordDontMatch");
			exit();
		}
		if(uidExists($conn,$user,$email))
		{
			header("location:../index.php?error=userNameTaken");
			exit();
		}
			createUser($conn,$user,$userID,$email,$password);
	}
	else
	{
		header("location:../index.php?error=emptyinput");

		exit();
	}

?>
<?php
 include_once("./connection.php");
 if(isset($_POST['submit']) && $_POST['nameID']!="" && $_POST['name']!="" && $_POST['email']!="" && $_POST['password']!="")
 {
     $nameID=$_POST['nameID'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     require_once 'functions.php';
     if(uidExists($conn,$nameID,$email))
		{
			header("location:./addUser.php?error=userNameTaken");
			exit();
		}
     createUser($conn,$nameID,$name,$email,$password);
 }
else
{
 exit();
}
?>
<?php
	function emptyinput($user,$userID,$email,$password,$passwordrp){
	$result;
	if(empty($user)||empty($userID)||empty($email)||empty($password)||empty($passwordrp))
	{
		$result=true;
	}
	else
	{
		$result=false;
	}
	return $result;
	}
	function invalidName($user){
		$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/",$user))
	{
		$result=true;
	}
	else
	{
		$result=false;
	}
	return $result;
	}
	function invalidEmail($email){
		$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$result=true;
	}
	else
	{
		$result=false;
	}
	return $result;
	}
	function passwordMatch($password,$passwordrp){
		$result;
	if($password!=$passwordrp)
	{
		$result=true;
	}
	else
	{
		$result=false;
	}
	return $result;
	}
	function uidExists($conn,$user,$email){
		$sql="SELECT * FROM taikhoan WHERE name = ? OR email = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:../index.php?error=stmtFail");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"ss",$user,$email);
		mysqli_stmt_execute($stmt);
		$resultData= mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_array($resultData))
		{
			return $row;
		}
		else
		{
			$result = false;
			return $result;
		}
		mysqli_stmt_close($stmt);
		
	}
	function createUser($conn,$user,$userID,$email,$password){
		$sql="INSERT INTO taikhoan(name,nameID,email,password) VALUES(?,?,?,?)";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:../index.php?error=stmtFail");
			exit();
		}
		$hashpass=password_hash($password, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ssss",$user,$userID,$email,$hashpass);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:../index.php?error=none");
		exit();
		
		
	}
	function emptylogin($user,$password){
	$result;
	if(empty($user)||empty($password))
	{
		$result=true;
	}
	else
	{
		$result=false;
	}
	return $result;
	}
	function loginUser($conn,$user,$password){
		$uidExit=uidExists($conn,$user,$user);
		if($uidExit ==false)
		{
			header("location:../index.php?error=wrongLogin1");
			exit();
		}
		$passHashed= $uidExit["password"];
		$checkPass= password_verify($password,$passHashed);
		if($checkPass==false)
		{
			header("location:../index.php?error=wrongLogin");
			exit();
		}
		else if($checkPass==true)
		{
			session_start();
			$_SESSION['name1']=$uidExit['nameID'];
			$_SESSION['name2']=$uidExit['name'];
			header("location:../index.php");
			exit();

		}
	}
?>
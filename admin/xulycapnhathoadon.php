<?php
    include_once("connection.php");
    if(isset($_POST['submit1']))
    {
        $id=$_POST['maHD'];
        $tenKH=$_POST['tenKH'];
        $sdt=$_POST['sdt'];
        $diachi=$_POST['diachi'];
        $email=$_POST['email'];
        $tongtien=$_POST['tongtien'];
        require_once 'functions.php';
        if(uidExists($conn,$nameID,$email))
		{
			header("location:suahoadon.php?id=$id&error=userNameTaken");
			exit();
		}
        updatehoadon($conn,$id,$tenKH,$sdt,$diachi,$email,$tongtien);
    }
    else
    {
    exit();
    }
?>
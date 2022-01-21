<?php
    function createItem($conn,$id,$namee,$brand,$img,$price){
        $stmt = mysqli_stmt_init($conn);
        $sql="INSERT INTO sanpham(IDSP,tenSP,loaiSP,image,price) VALUES (?,?, ?, ?, ?)";
        if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./QL_sanpham.php?error=stmtFail");
			exit();
		}
        mysqli_stmt_bind_param($stmt,"isssi",$id,$namee,$brand,$img,$price);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./QL_sanpham.php?error=none");
        exit();
    }
    function updateItem($conn,$id,$name,$brand,$img,$price){
        $stmt = mysqli_stmt_init($conn);
        $sql = "UPDATE sanpham SET IDSP = '$id', tenSP = '$name', loaiSP = '$brand', price = '$price', image = '$img' WHERE IDSP=$id";
        if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./QL_sanpham.php?error=stmtFail");
			exit();
		}
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./QL_sanpham.php?error=none");
        exit();
    }
    function updateUser($conn,$id,$nameID,$name,$email,$password){
        $stmt = mysqli_stmt_init($conn);
        $hashpass=password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE taikhoan SET ID = '$id', nameID = '$nameID', name = '$name', email = '$email', password = '$hashpass' WHERE ID=$id";
        if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./QL_taikhoan.php?error=stmtFail");
			exit();
		}
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./QL_taikhoan.php?error=none");
        exit();
    }
    function createUser($conn,$nameID,$name,$email,$password){
        $stmt = mysqli_stmt_init($conn);
        $sql="INSERT INTO taikhoan(nameID,name,email,password) VALUES (?, ?, ?, ?)";
        if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./QL_sanpham.php?error=stmtFail");
			exit();
		}
        $hashpass=password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$nameID,$name,$email,$hashpass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./QL_sanpham.php?error=none");
        exit();
    }
    function uidExists($conn,$nameID,$email){
		$sql="SELECT * FROM taikhoan WHERE name = ? OR email = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./addUser.php?error=stmtFail");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"ss",$nameID,$email);
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
    function updatehoadon($conn,$id,$tenKH,$sdt,$diachi,$email,$tongtien){
        $stmt = mysqli_stmt_init($conn);
        $sql = "UPDATE hoadon SET maHD = '$id', tenKH = '$tenKH', sdt = '$sdt', diachi = '$diachi', email = '$email',tongtien = '$tongtien' WHERE maHD=$id";
        if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:./QL_donhang.php?error=stmtFail");
			exit();
		}
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:./QL_donhang.php?error=none");
        exit();
    }
?>
<?php
		session_start();
		$cart = isset($_SESSION['cart'])? $_SESSION['cart'] : [];
		echo "<pre>";
		print_r($cart);
	include('connection.php');
	if(isset($_GET['dathang'])&&$_GET['ten'] !=""&&$_GET['sdt'] !=""&&$_GET['email'] !=""&&$_GET['diachi'] !="")
	{
		$ten=$_GET['ten'];
		$sdt=$_GET['sdt'];
		$email=$_GET['email'];
		$dc=$_GET['diachi'];
		// echo $ten;
		// echo " ";
		// echo $sdt;
		// echo " ";
		// echo $email;
		// echo " ";
		// echo $dc;
		// die();
		$total_price=0;
		foreach ($cart as $key => $value) {
			$total_price += ($value['price'] * $value['qty']);
		}
		$sql ="INSERT INTO hoadon(tenKH,sdt,diachi,email,tongtien) VALUES('$ten','$sdt','$email','$dc','$total_price')";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			$maHD= mysqli_insert_id($conn);
			foreach ($cart as $value) {
				mysqli_query($conn,"INSERT INTO chitiethoadon(IDSP,maHD,soLuong,thanhTien) VALUES('$value[id]','$maHD','$value[qty]','$value[price]')");
			}
			unset($_SESSION['cart']);
			header('location:/doanweb/index.php');
		}
	}
	else
	{
		header('location:dathang.php');
	}
?>
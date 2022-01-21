<?php
include'connection.php';
session_start();
if(isset($_SESSION['name2']))
    {
        if(isset($_GET['id']))
			{
				$id = $_GET['id'];
			}
		$qty = (isset($_GET["qty"])) ? $_GET['qty'] : 1;
		$act = (isset($_GET["action"])) ? $_GET['action'] : 'add';
		$size=(isset($_GET['size']))? $_GET['size']: 37;

		
		$sql = "SELECT * FROM sanpham WHERE IDSP = $id";
		
		$result = mysqli_query($conn,$sql);
		
		
			$product = mysqli_fetch_array($result);
		
		$item = [
			'id'=>$product['IDSP'],
			'name'=>$product['tenSP'],
			'image'=>$product['image'],
			'price'=>$product['price'],
			'qty'=>$qty,
			'size'=>$size,
		];
		if($act== 'add')
		{
		if(isset($_SESSION['cart'][$id]))
		{
			$_SESSION['cart'][$id]['qty']+=$qty;
			$_SESSION['cart'][$id]['size']=$size;

		}
		else{
			$_SESSION['cart'][$id]=$item;
		}
	}
	if($act == 'update')
	{
		$_SESSION['cart'][$id]['qty']=$qty;
	}
	if($act == 'updatesize')
	{
		$_SESSION['cart'][$id]['size']=$size;
	}
	if($act=='delete')
	{
		unset($_SESSION['cart'][$id]);
	}
	if($act == 'dathang')
	{
		echo "dat hang";
	}
		header('location:view-cart.php');
		echo"<pre>";
		print_r($_SESSION['cart']);
	
       
      
     }
     else
     {
     	header('location:/do_an_co/index.php?error=chuadangnhap');
     }
	
?>
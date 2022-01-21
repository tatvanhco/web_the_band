<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ACDsTore</title>
	<link rel="stylesheet" href="css/index.css"/>
	<!-- <link rel="stylesheet" href="./fontawesome/fontawesome-free-5.15.1-web/css/all.css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/6d2500d87e.js" crossorigin="anonymous"></script>   <!-- icon -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<script src="./fileJS/slide.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">




</head>
<body>
	<?php
	session_start();
	$cart = isset($_SESSION['cart'])? $_SESSION['cart'] : [];
		// echo "<pre>";
		// print_r($cart);
	if(isset($_POST['cart']))
	{
		var_dump($_POST);
	}
	?>
		<form action="abc.php" method="get">
	<div class="container">
		<div class="row">
			<h2>THÔNG TIN HÓA ĐƠN</h2>
						<div class="col-lg-8"></div>
			
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php $total_price = 0 ?>
			<?php foreach ($cart as $key => $value) {
				$total_price += ($value['price'] * $value['qty']);
			}
			?>
						<?php foreach ($cart as $key => $value): ?>
							<tr>
								<td><?php echo $value['name']?></td>
								<td><?php echo $value['qty']?></td>
								<td><?php echo number_format($value['price'])?></td>
								<td><?php echo number_format($value['price'] * $value['qty'])?></td>
							</tr>
						<?php endforeach ?>
						<tr>
							<td>Tổng Tiền</td>
							<td colspan="7" class="text-center bg-info"><?php echo number_format($total_price)?>VNĐ</td>
						</tr>
					</tbody>
				</table>
			<div class="col-lg-4" >
				
				
				<div class="form-group">
					<label >HỌ VÀ TÊN</label>
					<input type="text" name="ten" class="form-control" " aria-describedby="emailHelp">
					
				</div>
				<div class="form-group">
					<label>SỐ ĐIỆN THOẠI</label>
					<input type="text" name="sdt" class="form-control"  aria-describedby="emailHelp">
					
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" >
				</div>
				<div class="form-group">
					<label >Địa chỉ</label>
					<input type="text" name="diachi" class="form-control" >
				</div>
				<button type="submit" name="dathang" class="btn btn-info">ĐẶT HÀNG</button>
				
			
			</div>
		</div>
	</div>
	</form>
	<div class="panel panel-info">
		
		<div class="panel-body dess"></div>
	</div>
	
	
	
</body>
</html>

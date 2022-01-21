<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACDsTore</title>
    <link rel="stylesheet" href="do_an_co/css/index.css"/>

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
  	<style type="text/css">
  		.product{
		margin-left: 55px;
		border: solid 1px; 
		height: 175px; 
		width: 250px; 
		margin-top: 30px;
		float: left;
		border-radius:2px  ;
		}
		.anhSP img {
			display: block;
			max-width:280px;
			max-height:150px;
			width: auto;
			height: auto;
	}
  	</style>
      
    
    
</head>
<body>
	<?php
		session_start();
		$cart = isset($_SESSION['cart'])? $_SESSION['cart'] : [];
		// echo "<pre>";
		// print_r($cart);
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" >
				
                    <a href="/do_an_co/index.php">
                        <div class="anhSP"><img  src="/do_an_co/img/ACDsTore.png"/></div>
                    </a>
                
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Ảnh sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Size</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
						<th>Thành tiền</th>
						 <th></th>
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
				<td><?php echo $key ++?></td>
				<td><div class="product"><div class="anhSP"><img src="<?php echo $value['image']?>"></div></div> <!-- <img src="<?php echo $value['image']?>" > --></td>
				<td><?php echo $value['name']?></td>

				<td>
					<form action="cart.php">
						<input type="hidden" name="action" value="updatesize">
					<input type="hidden" name="id" value="<?php echo $value['id']?>">
					<input style="float: left;" maxlength="3" size="2" type="text" name="size" value="<?php echo $value['size']?>">
					<button type="submit" style="float: right;">Cập Nhật</button>
						<!-- <?php echo $value['size']?> -->
					</form>
				</td>
				<td>
				<form action="cart.php">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="<?php echo $value['id']?>">
					<input style="float: left;" type="text" name="qty" maxlength="3" size="2" value="<?php echo $value['qty']?>">
					<button type="submit" style="float: left;">Cập Nhật</button>
					
				</form>
				</td>
				<td><?php echo number_format($value['price'])?></td>
				<td><?php echo number_format($value['price'] * $value['qty'])?></td>
				<td><a href="cart.php?id=<?php echo $value['id']?>&action=delete" title="" class="btn btn-danger">Xóa</a></td>
			</tr>
		<?php endforeach ?>
		<tr>
			<td>Tổng Tiền</td>
			<td colspan="7" class="text-center bg-info"><?php echo number_format($total_price)?>VNĐ</td>
		</tr>
		</tbody>
	</table>
	</div>
		</div>
	</div>
	
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 style="float: right; margin-right: 10%;" class="panel-title"><a href="dathang.php" class="btn btn-success">Đặt Hàng</a></h3>
			</div>
			<div class="panel-body dess"></div>
		</div>
	
</body>
</html>

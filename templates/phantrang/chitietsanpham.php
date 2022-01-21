<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$con=mysqli_connect("localhost","root","","banhang");
	$sql_chitiet = mysqli_query($con,"SELECT * FROM sanpham WHERE IDSP='$id'"); 
?>

	<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5" style="border:2px solid black; width:80%;
	height:100%; margin-left:10%; background:v;">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row" >
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
						
									<div class="thumb-image">
										<img src="<?php echo $row_chitiet['image'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
							
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h2 class="mb-3"><?php echo $row_chitiet['tenSP'] ?></h2>
					<p class="mb-3">
						<span class="item_price" style="color:red;"><h2 ><?php echo number_format($row_chitiet['price']).'vnđ' ?></h2></span>
						<del class="mx-2 font-weight-light" style="color:red;"><?php echo number_format($row_chitiet['price']+$row_chitiet['price']*0.05).'vnđ' ?></del><br><br>
						
						<p>Sản phẩm có cả mẫu chuyên dụng cả nam & nữ.

					</p>
					
					<div class="product-single-w3l">
					
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="./templates/giohang/cart.php" method="GET">
								<fieldset>
								<br>
									
									<td class="canphai"> Mời bạn chọn size giày: </td>
									<select name="size" class="option">
                        				<option selected="select" disabled="disabled">37</option>
                            			<option>38</option>
                            			<option>39 </option>
                            			<option>40</option>
                           	 			<option>41</option>
										<option>42</option>
                    				</select>
                    				<td class="canphai">Số Lượng : </td>
                    				<select name="qty" class="option">
                        				<option  selected="select" disabled="disabled">1</option>
                            			<option>2</option>
                            			<option>3 </option>
                            			<option>4</option>
                            			<option>5</option>
                    				</select>
									<input type="hidden" name="id" value="<?php echo $row_chitiet['IDSP'] ?>"><br>
									<button type="submit" name="mua" class="btn btn-primary">Thêm vào giỏ hàng</button>			
									
									 
								<!-- 	<input  type="submit" name="themgiohang" value="Thêm Vào Giỏ Hàng" class="button" /> -->
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php
	} 
	?>
	<style>
		.occasion-cart input{
			background:#008037;
		}
	</style>
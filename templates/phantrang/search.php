<style type="text/css">
		.product{
		margin-left: 55px;
		border: solid 1px; 
		height: 340px; 
		width: 250px; 
		margin-top: 30px;
		float: left;
		border-radius:2px  ;
		}
		.a{
			
			border: solid 1px;
			height: 30px;
			width: 25px;
			float: left;
			text-align: center;
			margin-left: 250px;
			margin-top: 10px;
		
		}
		
		.p{
			display: block;
			margin-block-start: 1em;
			margin-block-end: 1em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
		}		
		.wrap{
			
			height: 800px;
		}
		.wrap1{
			height: 850px;
			border: solid 1px;
			margin-left:6%;
		}
		.anhSP img {
			display: block;
			max-width:280px;
			max-height:150px;
			width: auto;
			height: auto;
	}
		
		div.anhSP a :hover{
			transition: 0.5s;
			transform: translate(0,-15px);
		}
		button {
			border: 1px solid black;
			outline: 0;
			padding: 7px;
			color: white;
			background-color: #FFBD59;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
			margin: -7px;
		}
		[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
			cursor: pointer;
		}
		[type=button], [type=reset], [type=submit], button {
			-webkit-appearance: button;
		}
		button, select {
			text-transform: none;
		}
		button, input {
			overflow: visible;
		}
		button, input, optgroup, select, textarea {
			margin: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}
		button {
			border-radius: 0;
			
		}
		
		*, ::after, ::before {
			box-sizing: border-box;
		}
		* {
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		user agent stylesheet
		button {
			appearance: auto;
			text-rendering: auto;
			color: -internal-light-dark(black, white);
			letter-spacing: normal;
			word-spacing: normal;
			text-transform: none;
			text-indent: 0px;
			text-shadow: none;
			display: inline-block;
			text-align: center;
			align-items: flex-start;
			cursor: default;
			background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
			box-sizing: border-box;
			margin: 0em;
			font: 400 13.3333px Arial;
			padding: 1px 6px;
			border-width: 2px;
			border-style: outset;
			border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
			border-image: initial;
		}
		
		
	</style>
<div class="wrap1" act="home">
	<div class="wrap" style="clear: both;">
		<?php
		include('connection.php');
		if(isset($_POST['tukhoa'])){
			$tukhoa = $_POST['tukhoa'];
		}else{
			$tukhoa = '';
		}
		$item_per_page= !empty($_GET['per_page'])?$_GET['per_page']:8;
		$current_page=!empty($_GET['page'])?$_GET['page']:1;
		$offset=($current_page-1)*$item_per_page;
		$sql="SELECT * FROM sanpham,chungloai WHERE sanpham.loaiSP = chungloai.loaiSP AND sanpham.tenSP LIKE '%".$tukhoa."%'";
		$sql1=mysqli_query($conn,"SELECT * FROM sanpham");
		$result1=mysqli_num_rows($sql1);
		$totalpage=ceil($result1/$item_per_page);
		$result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
		while($row=mysqli_fetch_array($result)){ 
				?>
			<div class="product">
				<div class="anhSP">		
					<a href="?act=chitietsanpham&id=<?php echo $row['IDSP'] ?>">
						<img src="<?php echo $row['image']?>"title="<?php $row['tenSP']?> "/>
					</a>
				</div>
			<div>
				<div style="color:#ff4700; text-align:center;"><?php echo $row['tenSP']?></div> <br>
					<label style="color:black;">Giá:</label>
					<label style="color:red;"><span><?php echo number_format($row['price'])?></label>-<del style="color:red;"><?php echo number_format($row['price']+$row['price']*0.05)?></del> VND</span>
				</div>
				<p>
					<button><a href="?act=chitietsanpham&id=<?php echo $row['IDSP'] ?>" style="text-decoration: none;" class="link-product-add-cart">Xem sản phẩm</a></button>
				</p>
				<p>
					<button><a href="?act=chitietsanpham&id=<?php echo $row['IDSP'] ?>" style="text-decoration: none; " class="link-product-add-cart">Mua Ngay</a></button>
				</p>
			</div> 
		<?php }?>
		</div>
		<div style="margin-left: 45%;">
		<?php 
			include("phantrang.php");
		?>
		</div>
			
	</div>
</div>
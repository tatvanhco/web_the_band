<?php
	include_once("connection.php");
	if(isset($_POST['them']))
	{
		$sql="INSERT INTO sanpham (namee,brand,price,img) VALUES(?,?,?,?)";
		$namee=$_POST["name"];
        $brand=$_POST["brand"];
        $price=$_POST["price"];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("location:QL_sanpham.php?error=stmtFail");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ssss",$namee,$brand,$price,$img);
		mysqli_query($conn, $sql);
        //mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:QL_sanpham.php?error=none");
	}
	else
	{
		 exit();
		

	}
?>
<h3> Quản lý sản phẩm ( Sửa )</h3>
<table class="table">
    <thead>
        <tr class="thead-dark">
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hãng</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
            include_once("templates/connection.php");
            $sql = "SELECT * FROM sanpham";
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
?>
            <tr>
              <th scope="row"><?php echo $data["IDSP"]; ?></th>
              <td><?php echo $data["tenSP"]; ?></td>
              <td><?php echo $data["loaiSP"]; ?></td>
              <td><?php echo $data["price"]; ?></td>
              <td><?php echo "<img src='" .$data["image"]. "' height=150 width=200>"; ?></td>
              <td><a href="update.php?id=<?php echo $data["IDSP"]; ?>">Sửa</a></td>
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>

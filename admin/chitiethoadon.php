<h3> Quản lý hóa đơn mã : <?php echo $_GET["id"]?></h3>
<table class="table">
    <thead>
        <tr class="thead-dark">
            <th>ID sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
            include_once("connection.php");
            $sql = "SELECT * FROM chitiethoadon WHERE maHD=".$_GET["id"];
            $id=$_GET["id"];
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
?>
            <tr>
              <th scope="row"><?php echo $data["IDSP"]; ?></th>
              <td><?php echo $data["soLuong"]; ?></td>
              <td><?php echo $data["thanhTien"]; ?></td>
              <td><button type="button" class="btn btn-success btn-lg" id="update"><a href="#" style="color : black;">Sửa</button></a></td>
              <td><button type="button" class="btn btn-danger btn-lg" id="delete"><a href="#" style="color : black;"> Xóa</button></a></td>
            </tr>
            <?php
            }
                include_once("connection.php");
                $sql = "SELECT tongtien FROM hoadon WHERE maHD=".$_GET["id"];
                $query = mysqli_query($conn,$sql);
                $data = mysqli_fetch_array($query);
            ?>
            <tr>
                <th>Tổng tiền</th>
                <th></th>   
                <th><?php echo $data["tongtien"]; ?></th>
        </tr>
          <?php
                  //xu ly xoa 
                  $sql = "SELECT * FROM chitiethoadon";
                	$query = mysqli_query($conn,$sql);  
                  if (isset($_GET["idsp_delete"])) {
                      $sql = "DELETE FROM chitiethoadon WHERE IDSP = ".$_GET["idsp_delete"]."AND maHD=".$id;
                      mysqli_query($conn,$sql);
                  }
                  //end
          ?>
          </tbody>
        </table>
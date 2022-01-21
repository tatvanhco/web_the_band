<h3> Quản lý đơn</h3>
<table class="table">
    <thead>
        <tr class="thead-dark">
            <th>Mã hóa đơn</th>
            <th>Tên khách hàng</th>
            <th>SĐT</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Tổng tiền</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
            include_once("connection.php");
            $sql = "SELECT * FROM hoadon";
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
?>
            <tr>
              <th scope="row"><?php echo $data["maHD"]; ?></th>
              <td><?php echo $data["tenKH"]; ?></td>
              <td><?php echo $data["sdt"]; ?></td>
              <td><?php echo $data["diachi"]; ?></td>
              <td><?php echo $data["email"]; ?></td>
              <td><?php echo $data["tongtien"]; ?></td>
              <td><button type="button" class="btn btn-success btn-lg" id="update"><a href="suahoadon.php?id=<?php echo $data["maHD"]; ?>" style="color : black;">Sửa</button></a></td>
              <td><button type="button" class="btn btn-success btn-lg" id="update"><a href="xemchitiethoadon.php?id=<?php echo $data["maHD"]; ?>" style="color : black;">Xem</button></a></td>
              <td><button type="button" class="btn btn-danger btn-lg" id="delete"><a href="QL_donhang.php?id_delete=<?php echo $data["maHD"]; ?>" style="color : black;">Xóa</button></a></td>
            </tr>
          <?php
                  }
                  //xu ly xoa 
                  $sql = "SELECT * FROM hoadon";
                  $query = mysqli_query($conn,$sql);
                  if (isset($_GET["id_delete"])) {
                      $sql = "DELETE FROM hoadon WHERE maHD = ".$_GET["id_delete"];
                      mysqli_query($conn,$sql);
                  }
                  //end
          ?>
          </tbody>
        </table>
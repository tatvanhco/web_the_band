<h3> Quản lý tài khoản</h3>
<button type="button" class="btn btn-warning btn-lg" id="add"><a href="./addUser.php">Thêm tài khoản</button></a></td>
<table class="table">
    <thead>
        <tr class="thead-dark">
            <th>ID</th>
            <th>Tên</th>
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Password</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
            include_once("connection.php");
            $sql = "SELECT * FROM taikhoan";
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
?>
            <tr>
              <th scope="row"><?php echo $data["ID"]; ?></th>
              <td><?php echo $data["name"]; ?></td>
              <td><?php echo $data["nameID"]; ?></td>
              <td><?php echo $data["email"]; ?></td>
              <td><?php echo $data["password"]; ?></td>
              <td><button type="button" class="btn btn-success btn-lg" id="update"><a href="updateUser.php?id=<?php echo $data["ID"]; ?>">Sửa</button></a></td>
              <td><button type="button" class="btn btn-danger btn-lg" id="delete"><a href="QL_taikhoan.php?id_delete=<?php echo $data["ID"]; ?>">Xóa</button></a></td>
            </tr>
          <?php
                  }
                  //xu ly xoa 
                  $sql = "SELECT * FROM taikhoan";
                	$query = mysqli_query($conn,$sql);
                  if (isset($_GET["id_delete"])) {
                      $sql = "DELETE FROM taikhoan WHERE ID = ".$_GET["id_delete"];
                      mysqli_query($conn,$sql);
                  }
                  //end
          ?>
          </tbody>
        </table>
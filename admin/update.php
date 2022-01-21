<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACDsTore</title>
    <link rel="stylesheet" href="../css/admin.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./fontawesome/fontawesome-free-5.15.1-web/css/all.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6d2500d87e.js" crossorigin="anonymous"></script>   <!-- icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="fileJS/Script1.js"></script>
    
    
</head>
<body>
    <div class="divlogo">
        <?php
            include_once('divLogoAdmin.php');
        ?>
    </div>
    <div class="menu">
        <?php
            include_once('menuAdmin.php');
        ?>
        
    </div> 
    <div class="container" id="suasp">
        <div id="hienthi">
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
                        include_once("./connection.php");
                        $sql = "SELECT * FROM sanpham";
                        $query = mysqli_query($conn,$sql);
                        while ($data = mysqli_fetch_array($query)) {
            ?>
                        <tr>
                            <th scope="row"><?php echo $data["IDSP"]; ?></th>
                            <td><?php echo $data["tenSP"]; ?></td>
                            <td><?php echo $data["loaiSP"]; ?></td>
                            <td><?php echo $data["price"]; ?></td>
                            <td><?php echo "<img src='" .$data["image"]. "' height=100 width=150>"; ?></td>
                            <td><button type="button" class="btn btn-success btn-lg" id="update"><a href="updateForm.php?id=<?php echo $data["IDSP"]; ?>">Sửa</button></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
        </div>
    </div>
      <script src="../fileJS/scriptAdmin.js"></script>
</body>
</html>
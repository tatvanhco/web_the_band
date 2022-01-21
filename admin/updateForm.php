


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
    <?php
        include_once('connection.php');
        $id = -1;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "SELECT * FROM sanpham WHERE IDSP = ".$id;
        $query = mysqli_query($conn,$sql);
        if (!$query) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        while ($data = mysqli_fetch_array($query)) {
    ?>
    <div class="container" id="updateForm">
        <form action="./xulycapnhat.php" method="POST">
                    <div class="form-group">
                        ID sản phẩm: <input type="text" class="form-control" placeholder="Tên sản phẩm" name="id" required value="<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                        Tên sản phẩm: <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" required value="<?php echo $data["tenSP"]; ?>">
                    </div>
                    <div class="form-group">
                        Hãng: <input type="text" class="form-control" placeholder="Brand" name="brand" required value="<?php echo $data["loaiSP"]; ?>">
                    </div>

                    <div class="form-group">
                        Giá: <input type="number" class="form-control" placeholder="Giá" name="price" required value="<?php echo $data["price"]; ?>">
                    </div>
                    <div class="form-group">
                        URL ảnh: <input type="text" class="form-control" placeholder="URL ảnh" name="img" required value="<?php echo $data["image"]; ?>">
                    </div>
                    <?php echo "<img src='../" .$data["image"]. "' height=150 width=200>"; ?><br><br>
                    <button type="submit" class="btn btn-success" name="submit1">Cập nhật</button>
                    <button type="reset" class="btn btn-warning" >Xóa</button>
                </form>
    </div>
    <?php
    }
    ?>
</body>
</html>
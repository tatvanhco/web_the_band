<!DOCTYPE html>
<html lang="EN">
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
    <script type="text/javascript">
      function showDN()
        {
            document.getElementById('DN').style.display = 'block';
            document.getElementById('DK').style.display = 'none';
            document.getElementById('loii').style.display = 'none';
            


        }
function showDN1()
{
            document.getElementById('loii').style.display = 'none';
            
}
        function showDK()
        {
             document.getElementById('DN').style.display = 'none';
             document.getElementById('DK').style.display = 'block';

        }
function closeDK1()
{   
    document.getElementById('DK').style.display = 'none';
}
   function closeDN1()
        {
             document.getElementById('DN').style.display = 'none';
             // document.getElementById('DK').style.display = 'block';

        }
    </script>
    
</head>
<body>
<?php
		include('templates/phantrang/connection.php');
		
	?>
    <div class="divlogo">
        <?php
            include_once('templates/divLogo.php');
        ?>
    </div>
   
   <?php
        if(isset($_GET['error']))
        {
            if($_GET['error']=='chuadangnhap')
            {
                echo "<div id='loi'><p>Bạn Chưa Đăng Nhập Để Mua Hàng</p><a href='#' onclick='showDK3()'>Đăng Nhập</a> </div>";
                 echo "<script>
            function showDK3(){
                document.getElementById('loi').style.display = 'none';
                document.getElementById('DN').style.display = 'block';
            }
            </script>";
            }
        }
   ?>
    
    
    <div class="menu">
        <?php
            include_once('templates/menu.php');
        ?>
        
    </div> 

    <div class="slideshow">
        <?php
            include_once('templates/slideShow.php')
        ?>
    </div>
    <diV style="text-align:center; color:#801300;font-size: 40px;margin-top:-3%; border-radius:2px;" ><h1> Sản Phẩm Nổi Bậc </h1></div>
    <div class="content">
       
        <?php
            include_once('templates/content.php')
        ?>
    </div>
    <!--footer-->
    <footer class="footer" id="lienhe">
        <?php
            include_once('templates/footer.php');
        ?>
    </footer>
    <script src="fileJS/style.js"></script>
</body>
</html>
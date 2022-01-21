

<?php
    
        session_start();
    

    echo '      <a class="logo">
                    <a href="index.php">
                        <img id="logo" src="img/ACDsTore.png"/>
                    </a>
                </a>
                <div class="search">
                    <form action="/do_an/index.php?act=timkiem" method="POST">
                        <input type="search" placeholder="Tìm Kiếm..." id="text" name="tukhoa">
                        <input type="submit" name="timkiem" value="" style=" float: right;height: 48px; width: 50px;color:black;background: #ff4700;border-top-right-radius: 100px;border-bottom-right-radius: 100px;border: none;outline: none;cursor: pointer;margin-top: -47px;">
                        <i class="fa fa-search" style="padding-top:3.5%;"></i>
                    </form>    
                </div>
        ';
?>
<div class="user">
            <div id="lg"><a class="dn" style="font-size: 20px;" onclick="showDN()" href="#"><img src="./img/user_icon_001.jpg" ></a></div>
            <?php
            if(isset($_SESSION['name2']))
            {
                
                echo "<a href='DKDN/logout.php' class='fa fa-sign-out'>Log out</a>";
                echo "<script>
                function closelg(){
                document.getElementById('lg').style.display = 'none';
                    }
                </script>
                <body onload='closelg()'>
                ";
            }
            ?>
            <!--DN-->

            <a class="cart" style="font-size: 20px;" href="templates/giohang/view-cart.php"><img src="./img/shopping_cart_PNG38.png" ></a>
            <a  class="voucher"  style="font-size: 20px;" href="#"><img src="./img/voucher.jpg"></a>
        </div>
    </div>
        <?php
        include'DKDN/formDN.php';

    ?>

    <?php
    if(isset($_GET['error']))
    {
        if($_GET['error']=="emtyinput")
        {
            echo "<p>Điền vào các ô trống nhấn đăng nhập để đăng nhập lại</p>";
        }
        else if($_GET['error']=="wrongLogin1")
        {
            echo "<div id='loii'><p>Điền thông tin sai</p><a href='#' onclick='showDN3()'>Đăng Nhập</a> </div>";
            echo "<script>
            function showDN3(){
                document.getElementById('loii').style.display = 'none';
                document.getElementById('DN').style.display = 'block';
            }
            </script>";
           
        }
    }
?>
 
    
<?php
    include'DKDN/formDK.php';
  
?>
<?php
    if(isset($_GET['error']))
    {
        if($_GET['error']=="emptyinput")
        {
            echo "<p>Điền vào các ô trống</p>";
        }
        else if($_GET['error']=="invalidName")
        {
            echo "<p>Username đã tồn tại</p>";
        }
        else if($_GET['error']=="userNameTaken")
        {
            
             echo "<div id='loi'><p>Tên đã tồn tại</p><a href='#' onclick='showDK3()'>Đăng Ký</a> </div>";
            echo "<script>
            function showDK3(){
                document.getElementById('loi').style.display = 'none';
                document.getElementById('DK').style.display = 'block';
            }
            </script>";
        }
        else if($_GET['error']=="passwordDontMatch")
        {
            echo "<p>Mật khẩu không hợp lệ</p>";
        }
        else if($_GET['error']=="invalidEmail")
        {
            echo "<p>Email sai</p>";
        }
        else if($_GET['error']=="none")
        {
            // echo "<p>Đăng ký thành công</p>";
        }
    }
?>
    </div>
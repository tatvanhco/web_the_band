<?php
    if(isset($_POST['submit']))
    {
        $username_db = "admin";
        $password_db = "admin";
        $username = $_POST['uname'];
        $password = $_POST['pswd'];

        // Nếu thông tin đăng nhập chính xác, trả về giá trị là 1
        if ($username == $username_db && $password == $password_db) {
            header("location:../admin.php?login=success");
            exit();
        }

        // Nếu thông tin đăng nhập sai, trả về giá trị là 0
        else{
            header("location:../adminLogin.php?login=fail");
            exit();
        }
    }
?>
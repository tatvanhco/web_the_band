<?php
 include_once("./connection.php");
 if(isset($_POST['submit']) && $_POST['name']!="" && $_POST['brand']!="" && $_POST['price']!="" && $_POST['img']!="")
 {
    $id=$_POST['id'];
     $namee=$_POST['name'];
     $brand=$_POST['brand'];
     $price=$_POST['price'];
     $img=$_POST['img'];
     require_once 'functions.php';
     createItem($conn,$id,$namee,$brand,$img,$price);
 }
else
{
 exit();
}
?>
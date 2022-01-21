<?php
    include_once("connection.php");
    if(isset($_POST['submit1']))
    {
        $id=$_POST['id'];
        $namee=$_POST['name'];
        $brand=$_POST['brand'];
        $price=$_POST['price'];
        $img=$_POST['img'];
        require_once 'functions.php';
        updateItem($conn,$id,$namee,$brand,$img,$price);
    }
    else
    {
    exit();
    }
?>
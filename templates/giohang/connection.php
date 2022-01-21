<?php
	$a="localhost";
	$b="root";
	$c="";
	$d="banhang";
	$conn=mysqli_connect($a,$b,$c,$d);
	if(!isset($conn))
	{
		echo "loi";
	}
?>
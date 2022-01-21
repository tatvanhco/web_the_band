<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="border: solid 1px; width: 100%; height: 30px;">
		
		<?php
			if(isset($_SESSION['name2']))
			{
				
				echo "<a href='logOut.php'>Log out</a>";
			}
			else{
				echo "<a href='formDK.php'>ĐĂNG KÝ</a>";
				echo "<a href='formDN.php'>ĐĂNG NHẬP</a>";
			}
		?>
	</div>

</body>
</html>
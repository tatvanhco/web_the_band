<?php
    
	if($_GET==null){
		include'phantrang/index.php';
	}
	if(isset($_GET["page"])){
		if($_GET['page']){
			include ('phantrang/index.php');
		}}else{
			if(isset($_GET["act"])){
				if($_GET["act"]=="left"){
					if(isset($_GET["page"])){
						if($_GET['page']){
							include ('phantrang/index.php');
						}}
						if(isset($_GET["id"])){
							if($_GET['id']=="1"){
								include ('phantrang/showSP_adidas.php');
							}else if($_GET['id']=='2'){
								include ('phantrang/showSP_balenciaga.php');
							}else if($_GET['id']=='3'){
								include ('phantrang/showSP_gucci.php');
							}else if($_GET['id']=='4'){
								include ('phantrang/showSP_nike.php');
							}
						}
				}else if($_GET["act"]=="chitietsanpham"){
					include ('phantrang/chitietsanpham.php');
				}else if($_GET["act"]=="timkiem"){
					include ('phantrang/search.php');
				}
		
			}	
		}
?>
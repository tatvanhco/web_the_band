
	<?php
if($current_page>3){
		$first_page=1;
		echo '<a  href="index.php?page=' . $first_page. '">First</a> ';
		}
		if($current_page>1&&$totalpage>1)
	{
		echo '<a  href="index.php?page=' . ($current_page-1) . '">prev</a> ';
	}
	for ($page=1;$page<=$totalpage;$page++) {
        echo '<a  href="index.php?page=' . $page . '">' . $page . '</a> ';
	}
    if($current_page<$totalpage && $totalpage>1){
	$next_page=$current_page+1;
	
		echo '<a  href="index.php?page=' . $next_page . '">next</a> ';
	}
	if($current_page<$totalpage-3)
	{
	$end_page=$totalpage;
	echo '<a  href="index.php?page=' . $end_page. '">last</a> ';
	}
	
?>



<!-- <?php
	if($current_page>3){
		$first_page=1;
		?>
		<a class="a" href="?per_page=<?php $item_per_page?>&page=<?php $first_page?>">First</a>
		<?php }
		if($current_page>1) {
			$prev_page=$current_page-1;
			?>
			<a class="a" href="?per_page=<?php $item_per_page?>&page=<?php $prev_page?>">Prev</a>
		<?php } 
		?> -->

<?php for($num=1;$num<=$totalpage;$num++){?>
	<?php if($num!=$current_page){ ?>
		<?php if($num > $current_page-3 && $num<$current_page+3){ ?>
			<a class="a" href="?per_page=<?php $item_per_page?>&page=<?php $num?>"><?= $num?></a>
		<?php } ?>
	<?php } else { ?>
		<strong><?php $num?></strong>
	<?php } ?>
<?php } ?> 
<!-- <?php
if($current_page<$totalpage -1){
	$next_page=$current_page+1;
	?>
	<a class="a" href="?per_page=<?php $item_per_page?>&page=<?php $next_page?>">next</a>
	<?php
}

if($current_page<$totalpage-3)
{
	$end_page=$totalpage;
?>
<a class="a" href="?per_page=<?php $item_per_page?>&page=<?php $end_page?>">last</a>
<?php
}
?> -->




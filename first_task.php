<?php
	
	$a = rand(-100, 100);
	$b = rand(-100, 50);
	
	if (($a >= 0) && ($b >= 0)) {
		$z = $a-$b;
		echo $z;}
	elseif (($a <= 0) && ($b <= 0))  {
		$z = $a*$b;
		echo $z;}
	else  {
		$z = $a+$b;
		echo $z;}
?>	
<?php
	
	function plus($a, $b){
		return $a + $b;
	}
	
	function minus($a, $b){
		return $a - $b;
	}
	
	function delit($a, $b){
		return $a / $b;
	}
	
	function umnoj($a, $b){
		return $a * $b;
	}
	
	$a = int rand(0, 100);
	$b = int rand(0, 100);
	
	
	echo plus($a, $b);
	echo minus($a, $b);
	echo delit($a, $b);
	echo umnoj($a, $b);
	
?>	
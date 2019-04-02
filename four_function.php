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
	
	$a = rand(0, 100);
	$b = rand(0, 100);
	
	
	echo plus($a, $b)."<br />";
	echo minus($a, $b)."<br />";
	echo delit($a, $b)."<br />";
	echo umnoj($a, $b)."<br />";
	
?>	
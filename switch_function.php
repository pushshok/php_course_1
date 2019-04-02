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
	
	function mathOperation($a, $b, $operation) {
		
		switch($operation){ 
			case $operation == "plus": 
			$z = plus($a, $b); 
			break; 
			case $operation == "minus": 
			$z = minus($a, $b); 
			break;
			case $operation == "delit": 
			$z = delit($a, $b); 
			break; 
			case $operation == "umnoj": 
			$z = umnoj($a, $b); 
			break; 
			

} 
			return $z;
	}

	$a = int rand(0, 100);
	$b = int rand(0, 100);
	$operation = "plus";
	
	
	echo mathOperation($a, $b, $operation);
	
	
	
?>	



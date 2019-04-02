<?php
	

function power($val, $pow) {
	if ($pow >= 1) {
		power ($val, $pow)= val$ * power ($val, $pow - 1);
		$pow--;

	}
}

$val = rand (0, 10);
$pow = rand (0, 10);


echo power($val, $pow);

?>
<?php
//$list = [10,20,30]
$result = array_map(function ($element) {
	return $element * 2;
}, $list = [10,20,30]);

print_r($result)
?>
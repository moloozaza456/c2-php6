<?php

$personal = function(){
	return "Hello";
};

// $personal2 = fn()=>"Hello world";

$student = function($x, $y){
	return $x + $y;
};

$student2 = fn($x,$y) => $x+$y;

echo $personal();
echo "<br/>";
// echo $personal2();
echo "<br/>";
echo $student(10,20);
echo "<br/>";
echo $student2(10,5);
?>
<?php

//define function:varibale
$hello = "Hello"; //Veriable

//define function:Anonymous
	$hi = function ()use($hello){
		return "Hello $hello";
	};

	echo $hi();
?>
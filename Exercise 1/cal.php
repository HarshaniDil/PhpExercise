<?php

if(isset($_REQUEST['fnum']) && isset($_REQUEST['snum'])){

	function calculation($num1, $num2)
	{

		$sum = $num1 + $num2;
		echo "Addition = $sum";
		echo "<br>";

		$substraction = $num1 - $num2;
		echo "substraction = $substraction";
		echo "<br>";

		$mul = $num1 * $num2;
		echo "mul = $mul";
		echo "<br>";

		$div = $num1/$num2;
		echo "div = $div";
		echo "<br>";
		
		$mod = $num1%$num2;
		echo "mod = $mod";	
	
	}

	$F_no = $_REQUEST['fnum'];
	$S_no = $_REQUEST['snum'];

	calculation($F_no, $S_no);
}


?>
<html>
<head>
	<title>Function</title>
</head>
<body>
	<?php

$mystring = "mystring";
$signature = "md5($mystring)";

echo $signature;


	?>

	<?php 

	function Lowercase($str)
	{
		$str_i = strtolower($str);
		echo $str_i;
	}

	Lowercase("HELLOW WROLD");

	?>
	<br>

	<?php 
function hi()
{
	echo "Hellow, i am harshani";

}

hi();

	?>


	<br>
	-----------------------------------------------------------------
	<br>
	<?php 

	function add($a , $b)
	{
		$sum = $a +$b;
		echo "Sum is $sum";
	}

add(5,3);
echo "<br>";
add(9,3);
	?>

</body>
</html>
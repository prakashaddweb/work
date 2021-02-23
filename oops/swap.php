<?php

class myclass
{
	function swap($a,$b)
	{
		echo "call BY value :<br>";
		$t=$a;
		$a=$b;
		$b=$t;
		echo "values : $a $b";
	}

	function __construct(&$a,&$b)
	{
		echo "call BY reference :<br>";
		$t=$a;
		$a=$b;
		$b=$t;
	}
}

$a=10;$b=20;
$obj=new myclass($a,$b);
echo "values : $a $b<br>";
$obj->swap($a,$b);
?>
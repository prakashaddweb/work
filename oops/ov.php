<?php

class myclass
{
	function hello($a,$b)
	{
		echo $a+$b;
	}
}

class myclass2
{
	function hello($a,$b)
	{
		$sum=$a+$b;
		echo $sum;
	}
}

$obj=new myclass2();
$obj->hello(10,20);
?>
<?php

class myclass
{
	function myfunction(&$a,&$b)
	{
		$t=$a;
		$a=$b;
		$b=$t;
	}
}

$a=20;
$b=30;
$obj=new myclass();
$obj->myfunction($a,$b);
echo $a,$b;

?>
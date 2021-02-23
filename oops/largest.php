<?php

class myclass
{
	function myfunction($a,$b,$c=20)
	{
		if($a>$b && $a>$c)
		{
			echo $a." is the largest";
		}
		else if ($b>$c && $b>$a) {
			# code...
			echo $b." is the largest";
		}
		else 
		{
			echo $c." is the largest";
		}
	}
}

$obj=new myclass();
$obj->myfunction(60,50,90);

?>
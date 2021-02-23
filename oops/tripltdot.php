<?php

class myclass
{
	function myfunction(...$string)
	{
		foreach ($string as $value) {
			# code...
			echo $value;
		}
	}
}

$obj=new myclass();
$obj->myfunction(10,20,30);

?>
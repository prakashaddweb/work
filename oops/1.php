<?php

class myclass
{
	public $a=10;
	function myfunction()
	{
		$a=10;
		echo $a;
		echo "myfunction called";
	}

}

$mysql=new myclass();
$mysql->a=20;
echo $mysql->a;
$mysql->MYFunction();

?>
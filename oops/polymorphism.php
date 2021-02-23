<?php
class myclass
{

	function hello()
	{
		

		foreach(func_get_args() as $a)
		{
			echo "<br>";
			$sum=$sum+$a;
		}
		echo $sum;
		echo "<br>";
		$a=func_get_args();
		$cnt=count(func_get_args());
		for($i=0;$i<$cnt;$i++)
		{
			echo "<br>";
			//$sum+=$a[$i];
			echo $a[$i];
		}
		echo "<br>";

		echo $cnt;
	}
}

$obj=new myclass();
$obj->hello(10,20,30);
$obj->hello(10,'a',30,60);


?>
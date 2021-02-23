<?php
$a=20;
$b=30;
class myclass
{
	//public $c=50;
	function __construct()
	{
		global $a,$b;
		$a++;
		//$d=$GLOBALS['c'];
		$b++;
		//$d++;
		//echo "this is :".$d;
		echo "this is global"."<br>";
		echo $a."<br>".$b."<br>";
		$x=func_num_args();
		echo "number of arguments:".$x."<br>";
		foreach (func_get_args() as $value) 
		{
			echo $value."<br>";
			$sum+=$value;

			# code...
		}
			echo "sum is :".$sum;

	}

	function __destruct()
	{
		echo "<br>";
		echo "destructor called";

	}
		

}

$obj=new myclass(10,20,30);
echo "<br>this is global variable"."<br>";
echo $a."<br>".$b."<br>";
echo $obj->c;

//unset($obj);
?>
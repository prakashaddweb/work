<?php


class myclass
{
	public static $i=0;
	function myfunction()
	{
		//self::$i++;
		//echo self::$i;
		$this->i++;
		echo $this->i;
		//echo $i;
	}
	static function myfunction1()
	{
		echo "hello world";
	}
}

$obj=new myclass;
$obj->myfunction();
$obj->myfunction();
$obj1=new myclass;
$obj1->myfunction1();
$obj1->myfunction();

myclass::myfunction1();
?>

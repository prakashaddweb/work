<?php

class circumference
{
	var $PI=3.1415;
	function myfunction($r)
	{
		//global $PI;
		$cir = 2 * $this->PI * $r; 
    	echo $cir;
	}
	
}

class b extends circumference
{
	function hello()
	{
		echo "this is class b";
	}

}

class c extends b
{
	private $a;
	function hello2()
	{
		echo "<br>";
		echo $this->a=20;
		echo "<br>";
		parent::myfunction(5);
		echo "this is class c";
	}
}

$obj=new circumference();
$obj->myfunction(5);
echo "<br>";
$obj1=new circumference();
$obj1->myfunction(10);

echo "<br>";
echo "class b objects";
$obj3=new b();
$obj3->hello();
$obj3->myfunction(10);

$obj4=new c();
$obj4->hello2();
?>
<?php

abstract class myclass
{
	//we cannot create object of abstract class
	function myfunction()
	{
		echo "this is simple method";
	}

	abstract function kattu(); //abstract method does not have a body

	//abstraction means showing only essential infortion to user and hiding the implementaion
}

class demo extends myclass
{
	function kattu()
	{
		echo "overriding abstract function";
	}
}

$obj=new demo();
$obj->kattu();
$obj->myfunction();

?>
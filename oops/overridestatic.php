<?php

class myclass
{
	static function myfunction()
	{
		echo "hello";
	}
}

class myclass1 extends myclass
{
	static function myfunction()
	{
		parent::myfunction();
		echo "world";
	}
}

myclass1::myfunction();

?>
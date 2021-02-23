<?php

interface i1
{
	public function getdata();
	
}

interface i3
{
	public function getdata();
}
interface i2 extends i1
{
	public function getdata(); 
}	

class myclass implements i2,i3{

	function getdata()
	{
		echo "hello world";
	}
	
}


$obj=new myclass();
$obj->getdata();
?>
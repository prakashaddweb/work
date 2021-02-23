<?php

class myclass 
{
	private $age;
	private $name;
	function __construct($name="",$age=1)
	{
		$this->age=$age;
		$this->name=$name;
	}
	public function __get($a)
	{
		if($a=="age")
		{
			if($this->age>50)
			{
				return $this->age-10;
			}
			else
			{
				return $this->a;
			}

		}

	}
}

$obj=new myclass("prakash",40);


echo $obj->age;


?>


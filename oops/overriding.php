<?php

	class A
	{
		function display()
		{
			echo"a";
		}
		/*function display($ab)
		{
			$ab=10;
			echo $ab;
		}*/
		
	}
	class B extends A
	{
		function display()
		{
			parent::display();
			echo"b";
			
		}


	}
	class C extends B
	{
		function display()
		{
			parent::display();
			echo"c";
			

		}
		

	}

	$ch= new C();
	$ch->display();

?>
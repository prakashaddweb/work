<?php

class myclass
{
	function __construct($a)
	{
		$temp=$a;
		$sum=0;
		while(floor($a))
		{
			$rev=$a%10; // 1 //2 //1
			//echo $rev;
			$sum=$sum*10+$rev;
			echo "<br>".$sum;
			$a=$a/10;
		}

		if($temp==$sum)
		{
			echo "it is palindrome";
		}
		else
		{
			echo "not palindrome";
		}

	}
}


$obj=new myclass(121);

?>
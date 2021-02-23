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
			$sum+=$rev*$rev*$rev;
			//echo "<br>".$sum;
			$a=$a/10;

		}

		if($temp==$sum)
		{
			echo "it is armstrong";
		}
		else
		{
			echo "not armstrong";
		}

	}
}


$obj=new myclass(153);

?>
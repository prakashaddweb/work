<?php

function myfunction(&$a,$cnt)
{
	for($i=0;$i<$cnt;$i++)
	{
		$a[$i]+=1;
	}
}

$a=array(1,2,3,4);
$cnt=count($a);
myfunction($a,$cnt,$i);
for($i=0;$i<$cnt;$i++)
{
	echo $a[$i];
}
?>
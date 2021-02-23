<?php

function t1($i)
{
	$i=t2($i);
	echo $i++;
}

function t2($i)
{
	$a=$i++;
	return $a;
}
$i=10;
echo t1($i);

?>




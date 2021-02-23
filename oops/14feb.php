<?php

class myclass
{

function myfunction()
{

$cnt=func_num_args();
$x=func_get_args();
for($i=0;$i<$cnt;$i++)
{
global $name;
$name="prakash";
$sum=$sum+$x[$i];

}
echo "Sum is :".$sum;
}

function __construct()
{
echo "<br> this is parent class constructor";

}

function callingself()
{
self::__construct();
}

function override()
{
echo "<br><h4>parent override</h4";
}

}

class childclass extends myclass
{
function child()
{

echo "<br>";
echo "<br>this is child class<br>";
parent::myfunction(10,20,30);

}


function __construct($a,$b)
{

echo "<br><br>";
echo "this is child class constructor";

parent::__construct();
}

function override()
{
echo "<h1>this is overriding</h1>";
parent::override();
echo "<br><h4>child override</h4>";
}
}

$obj=new myclass();
$obj->myfunction(10,20,30,40);
$obj->callingself();

$obj=new myclass();
$obj->myfunction(10,20,30,40,50);
$obj->callingself();
//calling parent and child class both function
echo $GLOBALS['name'];
$child=new childclass(10,20);
$child->child();
$child->override();








//The function names construct(), destruct(), call(), callStatic(), get(), set(), isset(), unset(), sleep(), wakeup(), serialize(), unserialize(), toString(), invoke(), setstate(), clone() and debugInfo() are magical in PHP classes. You cannot have functions with these names in any of your classes unless you want the magic functionality associated with them.
?>
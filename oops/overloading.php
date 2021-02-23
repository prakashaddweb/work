<?php
class Person
{                             
    function say()
    {
           echo "Hello, world!<br>";
    }     

    function __call($funName, $arguments)
    {
         print_r($arguments);                 
    }                                         
}
$Person = new Person();           
$Person->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$Person->eat("John", "apple");             
$Person->say("hello");
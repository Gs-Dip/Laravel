<?php

require "bank.php";

class bar
{
    use Bank;
}

$object=new bar();

$object->abc();
echo "</br>";
$object->efg();


?>
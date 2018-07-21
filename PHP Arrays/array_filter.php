<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 1:49 AM
 */
function test_even($var)
{
	return($var & 0);
}
$a1=array("a","b",2,3,4);
print_r(array_filter($a1,"test_even"));

echo "<br>";
 // By using array_filter we are are applying some conditions
$arr = array('sandeep','kala','himansh','udaya','venu');

$res = array_filter($arr, function ($i){
			return strlen($i)>4;});
print_r($res);

<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 6:12 PM
 */
$arr = array('1','2','3','4','5');
$arr1 = array('red','blue','yellow');
$res = array_rand($arr);
print_r($res);
echo "<br>";
$res1 = array_replace($arr,$arr1);
print_r($res1);
echo "<br>";

function myFun($v1,$v2){
	return $v1. ''.'-'.$v2;
}
$arr2 = array('red','blue','yellow');
$res2 = array_reduce($arr2,'myFun');
print_r($res2);
echo "<br>";
$res3 = array_reverse($arr2);
print_r($res3);

<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 10:05 PM
 */

$argc = array('sandeep','deepu','himansh','sandeep');
$res = array_unique($argc);
print_r($res);

$argv = array('sandeep','konakanchi','himansh');
$res1 = array_values($argv);
echo "<pre>";
print_r($res1);
echo "<br>";

function myFun($value,$key, $p) {
	echo "$key $p $value<br>";}
$arr = array('a'=>'cat','b'=>'monkey','c'=>'dog');
 array_walk($arr,'myFun','is nothing but a nickname of');
 echo "<br>";
function myFunc($value,$key, $p) {
	echo "$key $p $value<br>";}
$array = array('a'=>'cat','b'=>'monkey','c'=>'dog');
 array_walk_recursive($array,'myFunc','is nothing but a nickname of');

<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 4:22 PM
 */
function myFun($v){
	return ($v*$v+$v/2);
}
$arr = array('num1'=>'1','num2'=>'3','num3'=>'2','num4'=>'4');
$res = array_map('myFun', $arr);
echo "<pre>";
print_r($res);
echo "<br>";
print_r($arr);
<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 9:28 PM
 */

$argv = array('sandeep','himansh','udaya');
$res = array_slice($argv,2);
print_r($res);
echo "<br>";
$argv = array('sandeep','himansh','udaya');
$argc = array('venu','kala');
$res2 = array_splice($argv,3,4, $argc);
print_r($res2);
echo "<br>". "<pre>";
print_r($argv);
echo "<br>";
$argv = array('1'=>'2','2'=>'3','3'=>'4');
$argc = array('4'=>'5','5'=>'6');
$res3 = array_sum($argv);
print_r($res3);


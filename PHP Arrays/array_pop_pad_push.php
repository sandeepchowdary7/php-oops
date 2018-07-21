<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 5:36 PM
 */
$argc = array('sandeep','konakanchi','himansh','samineni');
$res = array_pad($argc,7,'udaya');
echo "<pre>";
print_r($res);

$argv = array('sandeep','himansh');
$res1 = array_pop($argv);
echo "<br>";
echo "<pre>";
print_r($res1);
echo "<br>";
array_push($argv,'udaya');
print_r($argv);
echo "<br>";
$arg = array('5','6');
$res2 = array_product($arg);
print_r($res2);
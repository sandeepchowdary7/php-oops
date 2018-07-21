<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 10:32 PM
 */
$argv = array('1'=>'sandeep','3'=>'himansh','2'=>'udaya','4'=>'venu','5'=>'kala');
$res = sort($argv);
echo "<pre>";
print_r($argv);
var_dump($argv);
echo "<br>";
arsort($argv);
echo "<pre>";
print_r($argv);
echo "<pre>";
ksort($argv);
print_r($argv);
echo "<pre>";
krsort($argv);
print_r($argv);

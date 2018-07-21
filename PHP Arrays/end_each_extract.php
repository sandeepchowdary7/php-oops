<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 10/15/2017
 * Time: 10:59 PM
 */

$argv = array('1'=>'sandeep','2'=>'konakachi');
$res = each($argv);
print_r($res);
echo "<br>";
$argc = array('sandeep','deepu','himansh');
$res1 = end($argc);
print_r($res1);
echo "<br>";
$argc1 = array('sandeep','deepu','himansh');
$res2 = current($argc1);
print_r($res2);
echo "<br>";
$argc2 = array('sandeep','deepu','himansh');
$res3 = next($argc2);
print_r($res3);
echo "<br>";
